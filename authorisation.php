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
            <div class="search-bar">
                <div class="search-elem"></div>
            </div>
            <div class="profile-icons">
                <div class="profile-pic"></div>
                <h3 class="profile-name">User</h3>
            </div>
        </div>
    </div>
    
   </header>

   <section class="section">
        <div class="container">
            <div class="main-page">
                <div class="title">
                    <h1>Authorisation</h1>
                    <p>Here you can log in to your account.</p>
                </div>

                <div class="inputs">
                    <input type="text" name="" id="" placeholder="Username">
                    <input type="password" name="" id="" placeholder="Create password">
                    <p class="auth-skip">Don't have an account yet? <a href="index.php">Create now</a></p>
                </div>
                

                <input type="submit" name="toreg" value="Log In">
                
            </div>
        </div>
           

   </section>
</body>
</html>