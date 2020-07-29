 <?php
        $name = "Susana" ;
        $password = "root". $name;
        $mynum = 10;
        $mynum = $mynum +30;
        
        ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       if ( isset($POST["username"]) && isset ($POST["password"])){
                $username = $_POST["username"];
                $pasword = $_POST["password"];
            }  else {
                include_once("lib/utility.php");
                $result= mysql_query("SELECT * FROM admin WHERE username= '$username' AND password = '$password'")
               or die (mysql_error()) ;
                if(mysql_num_rows($result)== 0 ){
                  echo "username or password are incorrect.";  
                }  else {
                    echo "welcome $username.";
                    mysql_close($con);
                }
            }
            
            ?>
        <a href='somewhere.com'><?php echo $name,$password?></a>
        
        
    <form action="loginresult.php" method="post">  
    <table align="center" width="400" border="0" cellpadding="5" cellspacing="0">  
    <tr><td>Username : <input type="text" name="uname"></td></tr>  
    <tr><td>Password : <input type="password" name="upass"></td></tr>  
    <tr><td><input type="submit" value="Login"></td></tr>  
    </table>  
    </form>  
    </body>
</html>
