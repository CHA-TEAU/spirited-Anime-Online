<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Page</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

<?php
  session_start();
if (($_POST['auth'])) {

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    if (!empty($login) and !empty($pass)) {
        $db = @new mysqli('localhost', 'root', '', 'spirited');


        if ($db->connection_errno) {
            echo "error: " . $db->connection_errno;

        } else {

            $query = $db->query("SELECT * FROM `users` WHERE `Login`='$login' AND `Password`='$pass'");

                if($query -> num_rows == 0){
                    echo '<div class ="alert"> Такого пользователя не существует </div>';
                }else{
                
                    header("Location: mainpage.php");
                }

                

            }

        }          
    

    
    }
?>



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

                <form action="" method="post" class="form">

                    <div class="inputs">
                        <input type="text" name="login" id="" placeholder="Имя пользователя">
                        <input type="password" name="pass" id="" placeholder="Пароль">
                        <p class="auth-skip">Еще не завели аккаунт? <a href="index.php">Авторизация</a></p>
                    </div>


                    <input type="submit" name="auth" value="Log In">
                </form>
            </div>
        </div>
           

   </section>
</body>
</html>