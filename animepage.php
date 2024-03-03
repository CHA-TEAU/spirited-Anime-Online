<?
    include 'dbconnect.php';
    
    if($_GET)
    {
        $id = $_GET['id'];
        $db = DB :: dbconn();
                
            $query = $db -> query("SELECT * FROM `animes` WHERE `id` = '$id'");
            $row = $query -> fetch_assoc();

            if (isset($_POST['upd'])) {
                $id = $_POST['id'];
                $desc = $_POST['desc'];
                $uploaddir = 'pics/';
                $pic = $uploaddir . basename($_FILES['pic']['name']);
                
                if (!empty($desc)) {
                    move_uploaded_file($_FILES['pic']['tmp_name'], $pic);
                    $query = $db -> query ("UPDATE `animes` SET `Description`='$desc', `Picture`='$pic' WHERE `id`='$id'");
                    
                }
            }

        if(isset($_POST['heart-outline']) && isset($_POST['heart'])){
            $id = $_POST['id'];
            $like = $_POST['heart-outline'];
            $query = $db -> query("INSERT INTO `liked`(`id`, `Likes`) VALUES (NULL, '$id')");
        }
    }



    $wcd = $db->query("SHOW COLUMNS FROM `watchlist`");
    if ($wcd) {
        
        $columns = [];
        while ($field = $wcd->fetch_assoc()) {
            $columns[] = $field['Field'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Name</title>
    <link rel="stylesheet" href="anime.css">
</head>
<body>
<header>
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="pics/logo.png" alt="" class="gear">
                </div>

                <div class="search">
                    <input type="search" name="searchbar" id="searchbar">
                    <div class="searchbtn"></div>
                </div>

                <div class="icons">
                <ion-icon name="cog-outline" id="gear"></ion-icon>
                <a href="profile.php" class="prof__pic"></a>
                </div>
            </div>
        </div>
    </header>

    <section class="main__block">
        <div class="container">
            <div class="main__content">
                <div class="anime__content">
                    <div class="anime__pic">
                        <img src=<?=$row['Picture']?> alt="">

                        <div class="functionals">
                            <form action="" method="post" class="anime-func">
                                <select name="status" class="wcd">
                                    <? for ($i = 1; $i < count($columns); $i++) {?>
                                    
                                     <option value=<?=$columns[$i]?>><?=$columns[$i]?></option>
                                     <?}?>
                                </select>
                                        
                                <ion-icon name="heart-outline" class="like filled"></ion-icon>
                            </form>
                        </div>
                    </div>

                    <div class="anime__info">
                        <h1><?=$row['Title']?></h1>
                            <div class="last__news">
                                <div class="news__bar">
                                <div class="square"></div>
                                <p class="title">ИФОРМАЦИЯ</p>
                            </div>

                            <div class="tag__info">
                                <p>Тип: <?=$row['Type']?></p>
                                <p>Эпизоды: <?=$row['Episodes']?></p>
                                <p>Жанры: <?=$row['Genre']?></p>

                            </div>

                        
                        <span class="descrisption">
                            <?=$row['Description']?>
                        </span>


                    </div>
                </div>
            </div>

            <div class="player">
            <?php
                $query = $db->query("SELECT * FROM `videos` WHERE `ID_Anime` = $id");
                $episodes = $query->fetch_all(MYSQLI_ASSOC);

                // Extract video URLs into an array
                $videoUrls = array_column($episodes, 'video_url');
            ?>
                <div class="player__cont">
                    <video id="videoPlayer" controls>
                        <source src="<?=$videoUrls[0]?>" type="video/mp4">
                    </video>
                </div>
    
                <div class="video__swap">
                    <p class="prev" onclick="switchEpisode('prev')"><= Предыдущая серия</p>
                    <p class="next" onclick="switchEpisode('next')">Следующая серия =></p>
                </div>
            </div>
            <script>
                let videoUrls = <?= json_encode($videoUrls) ?>; 

                    function switchEpisode(direction) {
                
                    let currentSrc = document.getElementById('videoPlayer').getAttribute('src');
                    let currentIndex = videoUrls.indexOf(currentSrc);
                    
                    
                    let newIndex;
                    if (direction === 'prev') {
                        newIndex = currentIndex - 1;
                    } else {
                        newIndex = currentIndex + 1;
                    }
                
                   
                    if (newIndex >= 0 && newIndex < videoUrls.length) {
                        
                        document.getElementById('videoPlayer').setAttribute('src', videoUrls[newIndex]);
                        document.getElementById('videoPlayer').play(); 
                    }
                }
            </script>
    </section>    

    <div class="admin" id="admin">
        <form action="" method="post"  enctype="multipart/form-data">
            <div class="admin__panel">
                <ion-icon name="close-outline" id="close" class="closebtn"></ion-icon>
                <input type="hidden" name="id" value="<?=$row['id']?>">
               <input type="file" class="picture" name="pic" class="input">
              <textarea name="desc" class="desc"></textarea>
              <input type="submit" value="Изменить" name="upd" class="addbtn">
           </div>
        </form>  
    </div>
</body>

<script src="/script/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>