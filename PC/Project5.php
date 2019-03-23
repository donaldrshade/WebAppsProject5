<?php
    session_start();
    $postUser = $_POST["PC-username"];
    $sessUser = $_SESSION["PC-username"];
    if( !isset($postUser) || empty($postUser)){//Check the post
        //Here we will need to validate aswell
        $username = $postUser;
        $_SESSION["PC-username"]= $postUser;
    }
    if( !isset($sessUser) || empty($sessUser)){
        //Here we are good to go and we remember from last time
        $username = $sessUser;
    }
    if( !isset($username) || empty($username)){
        //this will set it to Guest if it has nothing else;
        $username = "Guest";
    }
?>
<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="Resources/pcCSS.css" type="text/css">
    <head>
        <meta charset="UTF-8" content="NO-CACHE">
        <title>People's Choice Awards</title>
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="js/pc.js"></script>
        
        
    </head>
    <body>
        <div class="banner">
            <img src="Resources/banner.png" id="welcome"/>
        </div>
        <div class="greeting">Hello, <?php echo $username ?></div>
        <div class="interactionButtons">
            <div class="login">
                <form action="Project5.php" method="post">
                    Username:<input type="text" id="PC-username">
                    Password:<input type="password" id="password">
                    <input type="button" value="Login" class = "button" id="login">
                </form>
            </div>
            <div class ="view">
                <form action="none">
                    <select id="projectView"></select>
                    <input type="button" value="View" class ="button" id="view">
                </form>
            </div>
        </div>
    </body>
</html>
