<?php
$host="localhost:3308";
$username="root";
$password="";
$db_name="oldage";
$tbl_name="personal_details";

$connect= mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");

$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Dob = $_POST['Dob'];
$Gaurdianname = $_POST['Gaurdian_name'];
$Gaurdiannum = $_POST['Gaurdian_num'];
$DoJ = $_POST['DoJ'];

$sql="INSERT INTO $tbl_name(Id,Name,Dob,Gaurdian_name,Gaurdian_num,DoJ)
VALUES('$Id','$Name','$Dob','$Gaurdianname','$Gaurdiannum','$DoJ')";
$rs = mysqli_query($connect, $sql);
$sql="INSERT INTO remainder (p_id, rem_date)
VALUES('$Id','$DoJ')";
$rs = mysqli_query($connect, $sql);
if($rs)
{
header('Location:add1.html'); 
}
else
{
    echo "Error";
}
?>