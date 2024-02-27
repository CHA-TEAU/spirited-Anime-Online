<?
    include 'dbconnect.php';
    $db = DB :: dbconn();
    $query = $db -> query("SELECT * FROM `users` WHERE `Login` = 'chateau'");
    $row = $query -> fetch_assoc();
    
    if($_POST['upl'])
    {
       

            $uploaddir = 'pics/';
            $pic = $uploaddir . basename($_FILES['pic']['name']);
            
            
            move_uploaded_file($_FILES['pic']['tmp_name'], $pic);
            $query = $db -> query ("UPDATE `users` SET `Photo`='$pic' WHERE `Login` = 'chateau'");
                
                
            
    }


  
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
                    <img src=<?=$row['Photo']?> alt="">
                </div>
            </div>
        </div>
</header>  

<section class="main__block">
        <div class="container">
            <div class="profile__content">

                <div class="profile__pic-div">
                    <img src=<?=$row['Photo']?> alt="" class="profile__pic">
                    <div class="prof_pic__upd">
                        <form action="" method="post"  enctype="multipart/form-data">
                            <label for="photo-upload"><ion-icon name="images-outline"></ion-icon></label>
                            <input type="file" name="pic" id="photo-upload">
                            <input type="submit" value="upl" name="upl">  
                        </form>
                          
                    </div>
                </div>

                <div class="prof__info">
                    <h1>Имя пользователя</h1>

                    <div class="news__bar">
                        <div class="square"></div>
                        <p class="title">ЛЮБИМОЕ</p>
                    </div>

                    <div class="fav__list">
                        <div class="fav__elem"></div>
                        <div class="fav__elem"></div>
                        <div class="fav__elem"></div>
                        <div class="fav__elem"></div>
                    </div>
                </div>
                
            </div>

            <div class="wcd__block">
                <div class="wcd__container">
                    <div class="news__bar">
                        <div class="square"></div>
                        <p class="title">СМОТРЮ</p>
                    </div>

                    <div class="wcd__choice">
                        <span>Смотрю /</span>
                        <span>Просмотрено /</span>
                        <span>Брошено</span>
                    </div>

                    <div class="wcd__list">
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                        <div class="anime__block">
                            <div class="img"></div>
                            <p class="anime___title">Lorem ipsum</p>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>    
    

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>