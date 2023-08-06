<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/css/styless.css">    
    
</head>
<body>

   
  <div class="logoo">
 <a href="landing.php" >    
<img class="logoo" src="images/banner.png" alt="" title=""></a>
</div>

    

      

    
  
    <div class="contact-box">
       <h1>Contact Us</h1>
       <form <form method="post" action="feedback.php" autocomplete="off" role="form" class="php-email-form">
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
            <input type="text" name="name" class="input-field" placeholder="Full Name">
            <input type="email" name="email" class="input-field" placeholder="Email">
            <input type="text"  name ="subject" class="input-field" placeholder="Subject">
            <textarea type="text" name="message" class="input-field textarea-field" placeholder="Message"></textarea>
            <input class = "btn" name="submit" type = "submit" value = "submit" placeholder="Send Message">
        </form>
    </div>
    
</body>
</html>