<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname ='oldage';
   $conn=mysqli_connect($servername,$username,$password,$dbname,"3308");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
   $d = date("Y-m-d");
   echo $d;
   $sql = " SELECT * FROM personal_details where Doj = '$d'";
   $result = mysqli_query($conn, $sql);
   foreach($result as $row) {
    echo $row['Name'];
   }
?>