<?php
include("rem.php");
if(isset($_POST['Id']) && isset($_POST['submit'])){
    $courseId= $_POST['Id'];
    $query ="SELECT * FROM history";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $history= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }else{
     $history=[];
    }
}
?>