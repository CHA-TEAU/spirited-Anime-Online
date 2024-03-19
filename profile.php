<?
    include 'dbconnect.php';
    session_start();
    $db = DB :: dbconn();
    $uid = $_SESSION['id'];

    $query = $db -> query("SELECT * FROM `users` WHERE `id` = '$uid'");
    $var = $query -> fetch_assoc();
    
    if(isset($_POST['update']))
    {

            $newLogin = $_POST['login'];
            $uploaddir = 'pics/';
            $pic = $uploaddir . basename($_FILES['pic']['name']);
            
            
            move_uploaded_file($_FILES['pic']['tmp_name'], $pic);
            $query = $db -> query ("UPDATE `users` SET `Login` = '$newLogin', `Photo`='$pic' WHERE `id` = '$uid'");   
            
    };

    
    $like_query = "SELECT *
    FROM liked
    INNER JOIN animes ON animes.id = liked.Likes
    WHERE user_id = '$uid'";

    $q = $db->query($like_query);
    $arr = [];
    while($row = $q->fetch_assoc()) {
        array_push($arr, $row);
    }
    $recLikes = array_slice($arr, -5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<header>
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="pics/logo.png" alt="" width="200px">
                </div>

                <div class="search">
                    <input type="search" name="searchbar" id="serachbar">
                    <div class="searchbtn"></div>
                </div>

                <div class="prof__pic">
                    <?
                        if($var['Photo'] == ''){
                            ?><img src=../pics/user_avatar.png><?;
                        } else {?>
                            <img src="<?=$var['Photo']?>"><?
                        }
                    ?>
                </div>
            </div>
        </div>
</header>  

<section class="main__block">
        <div class="container">
            <div class="profile__content">

                <div class="profile__pic-div">
                    <img src=<?=$var['Photo']?> alt="" class="profile__pic">
                    <form id="upload-form" action="" method="post" enctype="multipart/form-data" class="prof_pic__upd" style="display:none;">
                            <label for="photo-upload" name="pic">
                                <ion-icon name="images-outline" id="pic"></ion-icon>
                            </label>
                            <input type="file"  id="photo-upload">
                    </form>

                </div>

                <div class="prof__info">
                        
                    <form action="" method="post"  class="login__red">
                        <h1 class="login__field"><?=$var['Login']?></h1>
                        <ion-icon name="pencil-outline" id="red"></ion-icon>
                        <input type="submit" value="☑" id="ok__btn" name="update">
                    </form>
                       

                    

                    <div class="news__bar">
                        <div class="square"></div>
                        <p class="title">ЛЮБИМОЕ</p>
                    </div>

                    <div class="fav__list">

                        <?foreach($recLikes as $value){?>
                        <img src="<?=$value['Picture']?>" class="fav__elem" alt="">
                    
                        <?}?>
                    </div>
                </div>
                
            </div>
    </section>    
    
<script src="/script/profile.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
