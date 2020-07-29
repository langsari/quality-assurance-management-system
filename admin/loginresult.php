 <?php  
 include_once("lib/utility.php");
qa();
$username = "";
$password = "";
$result = mysql_query("select * from admin where (user='$username') and (userpass='$password')");  
$rowlogin= mysql_fetch_array($rslogin);  
$num_rows = mysql_num_rows($rslogin);   //เช็คว่าค่า user และ password ที่กรอกเข้ามามีอยู่หรือไม่ ถ้าเจอก็ login ได้ 
  
if(empty($num_rows)) {  // ถ้าไม่เจอ record เลย
    echo "username หรือ password ไม่ถูกต้อง   <a href=login.php>แก้ไข</a>";  
  
} else {  
    $_SESSION['sessusername'] = $rowlogin['user'];  
    @header("Location:login1.php");  // redirect ไปหน้า memberzone.php
    exit;  
}  
?>  
