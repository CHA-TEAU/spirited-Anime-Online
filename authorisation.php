<?php
    if(($_POST['toreg'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Page</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>
   <header>
    <div class="container">
    <div class="nav">
            <img src="../pics/logo.png" alt="" width="200px">
        </div>
    </div>
    
   </header>

   <section class="section">
        <div class="container">
            <div class="main-page">
                <div class="title">
                    <h1>Авторизация</h1>
                    <p>Здесь вы можете зайти в свой аккаунт</p>
                </div>

                <div class="inputs">
                    <input type="text" name="login" id="" placeholder="Имя пользователя">
                    <input type="password" name="pass" id="" placeholder="Пароль">
                    <p class="auth-skip">Еще не завели аккаунт? <a href="index.php">Регистрация</a></p>
                </div>
                

                <input type="submit" name="auth" value="Log In">
                
            </div>
        </div>
           

   </section>
</body>
</html>