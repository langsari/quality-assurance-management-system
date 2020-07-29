<?php
session_start();
//include 'lib/utility.php';
if(!empty($_SESSION['username'])){
   header("location:admin_home.php"); 
}else{
    //$username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Please Log In</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/foundation.css">
        <link rel="stylesheet" href="css/app.css">
        <script src="js/vendor/modernizr.js"></script>
        <script src="js/script.js"></script>
        <style type="text/css">
            p.margin {margin: 0.5cm }
            .footer {padding: 7px 0;
                     background: #333333;}
            .white{color: white}
        </style>
    </head>
    <body>
        <p class="margin"></p>
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><a href="#">Quality Assurance Management System for FLA</a></h1>
                </li>
            </ul>
        </nav>
<!--        login check with Script.js-->
        <form action="dologin.php" method="post" name="login" onsubmit="return login_check_th()">
            <div class="row">
                <div class="small-2 large-4 columns">.</div>
                <div class="small-4 large-4 columns">
                    <fieldset>
                        <legend>Please log in</legend>
                        <label>username
                            <input name="username" type="text" id="username" placeholder="username" maxlength="20" />
                        </label>
                        <label>password
                            <input name="password" type="password" id="password" placeholder="password" maxlength="20" />
                        </label>
                        <p><input type="submit" name="submit_login" id="submit_login" value="OK" class=" button tiny round "></p>           
                    </fieldset>
                </div>
                <div class="small-6 large-4 columns">.</div>
            </div>
        </form>     
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
        
    </body>   
</html>