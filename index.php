<?php
    session_start();
?>
<html>
    <head>
        <link rel="icon" href="images/logo.png">
        <link rel = "stylesheet" href = "assets/css/styles.css">
        <title>Chitra
        </title>
    </head>
    <body>

        <section class = "main-wrapper">
            <ul>
                <li> Crafted. Curated.</li>
             <li>Inspired</li>
                        </ul>





            <div class = "branding">



            </div>
               <div>
                <div class="panel">
                    <img src="images/chitra.png" class="chitra"><br>
                    <form <form method="post" action="loginvalidate.php" autocomplete="off" role="form" class="php-email-form">
                    <div class="error_message">
                    <?php
                    if(!isset($_SESSION['login-msg']))
                        {
                            echo "<p></p><hr>";
                        }
                    else
                        {
                            echo "<h1>".$_SESSION['login-msg']."</h1><hr>";
                            session_destroy();
                        }
                    ?></div>
                        <p>Username </p>
                        <input type = "text" name="Username" placeholder = "Username" required>
                       <p>Password</p>
                        <input type = "password" name="Pass" placeholder = "Password" required>
                        <input class = "log-in-button" name="submit" type = "submit" value = "submit">






                    </form>
                    <hr>
                    <a class ="register-button"
                    href ="register.php"> Create New Account </a>
                    </div>
                <div class ="bottom-link">
                    <a class="page" href = "#"></a>
                    </div>
            </div>
        </section>

    </body>
</html>