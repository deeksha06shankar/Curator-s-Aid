<?php
   $servername='localhost:3308';
   $username='root';
   $password='';
   $dbname ='oldage';
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>

