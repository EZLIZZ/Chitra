<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="images/logo.png">
</head>
<body>
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
                    <form <form method="post" action="database.php" autocomplete="off" role="form" class="php-email-form">
                    <div class="Confirmations_message">
                    <?php
            if (!isset($_SESSION['reg-msg']))
                {
                    echo "<p></p>";
                } 
            else 
                {
                    echo "<h2>" . $_SESSION['reg-msg'] . "</h2><hr>";
                    session_destroy();
                }
            ?>  
            </div>
                        <p>Username </p>
                        <input type = "text" name="Uname" placeholder = "Username" required>
                        <p>Email </p>
                        <input type = "text" name="Email" placeholder = "Email" required>
                       <p>Password</p>
                        <input type = "password" name="Password" placeholder = "Password" required>
                        <p>Date of Birth</p>
                        <input name= "DoB" type = "date" class="date" placeholder = "dd/mm/yy">
                        <input name = "submit" class = "log-in-button" type = "submit" value = "Signup">


                        


                        
                    </form>
                    <hr>
                    <a class ="forgot" href = "index.php"> 
                        Login </a>
                    </div>
                <div class ="bottom-link">
                    <a class="page" href = "#"></a>
                    <p> </p>
                </div>
            </div>
        </section>
    </body>
</html>
    
</body>
</html>