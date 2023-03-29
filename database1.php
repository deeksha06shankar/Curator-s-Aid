<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname ='oldage';
   $conn=mysqli_connect($servername,$username,$password,$dbname,"3308");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>