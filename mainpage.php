<?
    include 'dbconnect.php';
    
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $type = $_POST['type'];
        $eps = $_POST['eps'];
        $desc = $_POST['desc'];
        $genre = $_POST['genre'];
        $uploaddir = 'pics/';
        $pic = $uploaddir . basename($_FILES['pic']['name']);
        
        if (!empty($title)) {
            // Move uploaded file to destination directory
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $pic)) {
                $db = DB::dbconn();
                $query = $db->query("INSERT INTO `animes`(`id`, `Title`, `Type`, `Episodes`, `Genre`, `Description`, `Picture`) 
                                    VALUES (NULL,'$title','$type','$eps','$genre','$desc','$pic')");
            }
    }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spirited</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="nav">
                <div class="logo">
                    <img src="pics/logo.png" alt="">
                </div>

                <div class="search">
                    <input type="search" name="searchbar" id="searchbar">
                    <div class="searchbtn">Поиск</div>
                </div>

                <div class="icons">
                <ion-icon name="cog-outline" id="gear"></ion-icon>
                <div class="prof__pic"><a href="profile.php"></a></div>
                </div>
                

                
            </div>
        </div>
    </header>


    <section class="main__block">

    <?
    $db = DB :: dbconn();
    $query = $db -> query("SELECT * FROM `animes` ");  
    ?>

    
        <div class="container">
            <div class="main__content">
                <div class="last__news">
                    <div class="news__bar">
                        <div class="square"></div>
                        <p class="title">НОВИНКИ</p>
                    </div>

                    <div class="anime__list">
                        <div class="more"><ion-icon name="menu-outline"></ion-icon></div>
                    <? while ( $row = $query -> fetch_assoc())
                    { ?>
                        <a href="/animepage.php?id=<?=$row['id']?>" class="anime__block hoverblock">
                           <img src=<?=$row['Picture']?> alt="" class="img">
                            <p class="anime___title"><?=$row['Title']?></p>
                    </a>
                    <?}?>    
                    </div>

                </div>

                    <div class="genre__list">
                        <div class="news__bar">
                            <div class="square"></div>
                            <p class="title">ЖАНРЫ</p>
                        </div>

                        <div class="genres">
                            <ul>
                                <li>Сёнэн</li>
                                <li>Романтика</li>
                                <li>Ужасы</li>
                                <li>Повседневность</li>
                                <li>Детектив</li>
                                <li>Детское</li>
                                <li>Спорт</li>
                                <li>Махо-сёдзе</li>
                                <li>Музыка</li>
                                <li>Драма</li>
                                <li>Приключения</li>
                                
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </section>

<div class="admin" id="admin">
    <form action="" method="post"  enctype="multipart/form-data">
        <div class="admin__panel">
            <ion-icon name="close-outline" id="close" class="closebtn"></ion-icon>
           <input type="file" class="picture" name="pic" class="input">
           <input type="text" placeholder="Название" name="title" class="input">
           <input type="text" placeholder="Тип" name="type" class="input">
           <input type="text" placeholder="Эпизоды" name="eps" class="input">
           <select name="genre">
               <option value="Жанр">Жанр</option>
          </select>
          <textarea name="desc" class="desc"></textarea>
          <input type="submit" value="Добавить" name="add" class="addbtn">

       </div>
    </form>   

</div>
   






<script src="/script/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>