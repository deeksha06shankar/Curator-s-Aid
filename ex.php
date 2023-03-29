<?php
$host="localhost:3308";
$username="root";
$password="";
$db_name="oldage";
$tbl_name="pill_details";

$connect= mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");

$Id = $_POST['Id'];
$Name = $_POST['Name'];
$pills_taken = $_POST['pills_taken'];


$sql="INSERT INTO $tbl_name(Id,Name,pills_taken)
VALUES('$Id','$Name','$pills_taken')";
$rs = mysqli_query($connect, $sql);

if($rs)
{
header('Location:home.php'); 
}
else
{
    echo "Error";
}
?>