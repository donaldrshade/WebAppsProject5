<?php
    session_start();
    $username = $_SESSION["user_name"];
    if( !isset($username) || empty($username)){
        $username = "Guest";
    }
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="Resources/pcCSS.css" type="text/css">
    <head>
        <meta charset="UTF-8">
        <title>People's Choice Awards</title>
    </head>
    <body>
        <div class="banner"></div>
        <div class ='greeting'>Hello, <?php echo $username ?></div>
    </body>
</html>
