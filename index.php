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

if (isset($_POST['reg'])) {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    if (!empty($login) && !empty($email) && !empty($pass)) {
        $db = @new mysqli('localhost', 'root', '', 'spirited');

        if ($db->connect_errno) {
            echo "Error: " . $db->connect_errno;
        } else {
            
            $check_query = $db->query("SELECT * FROM `users` WHERE `Login`='$login' OR `Email`='$email'");
            if ($check_query->num_rows > 0) {
                echo '<div class ="alert"> Пользователь с таким логином или email уже существует </div>';
            
            } else {
                
                $query = $db->query("INSERT INTO `users` (`id`, `Login`, `Email`, `Password`, `Role`) VALUES (NULL, '$login', '$email', '$pass', '$role')");

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
    
   </header>

   <section class="section">
        <div class="container">
            <div class="main-page">
                <div class="title">
                    <h1>Регирстация</h1>
                    <p>Здесь вы можете создать свой аккаунт</p>
                </div>

                <form action="" method="post" class="form">

                    <div class="inputs">
                        
                            <input type="text" name="login" id="" placeholder="Имя пользователя">
                            <input type="text" name="email" id="" placeholder="Email">
                            <input type="password" name="pass" id="" placeholder="Пароль">
                            <p class="auth-skip">Уже есть аккаунт?<span> Войти</span></p>
                        
                    </div>
                    
    
                    <input type="submit" name="reg" value="Регистрация">
                </form>
            </div>
        </div>
           

   </section>
</body>
</html>