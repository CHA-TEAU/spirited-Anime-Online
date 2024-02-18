<?
    include 'dbconnect.php';
    
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
                    <img src="pics/logo.png" alt="" width="200px">
                </div>

                <div class="search">
                    <input type="search" name="searchbar" id="serachbar">
                    <input type="submit" value="Search">
                </div>

                <div class="prof__pic">

                </div>
            </div>
        </div>
    </header>


    <section class="main__block">

    <?
    $db = DB :: dbconn();
    $query = $db -> query("SELECT * FROM `animes` ");  
    ?>

    <ion-icon name="cog-outline" id="gear"></ion-icon>
        <div class="container">
            <div class="main__content">
                <div class="last__news">
                    <div class="news__bar">
                        <div class="square"></div>
                        <p class="title">НОВИНКИ</p>
                    </div>

                    <div class="anime__list">
                    <? while ( $row = $query -> fetch_assoc())
                    { ?>
                        <div class="anime__block hoverblock">
                           <img src=<?=$row['Picture']?> alt="" class="img">
                            <p class="anime___title"><?=$row['Title']?></p>
                        </div>
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
                                <li>Приклюения</li>
                                
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </section>

<div class="admin" id="admin">
    <div class="admin__panel">
            <ion-icon name="close-outline" id="close" class="closebtn"></ion-icon>
           <input type="file" class="picture">
           <input type="text" placeholder="Название">
           <input type="text" placeholder="Тип">
           <input type="text" placeholder="Эпизоды">
           <select name="updname">
               <option value="Жанр">Жанр</option>
          </select>
          <input type="text" placeholder="Описание" class="desc">


       </div>

</div>
   






<script src="/script/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>