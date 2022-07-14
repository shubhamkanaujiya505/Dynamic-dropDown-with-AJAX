<?php
    $servername='localhost';
    $username='root';
    $password='123456';
    $dbname = "location";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>