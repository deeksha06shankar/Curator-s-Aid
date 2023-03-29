<?php
$host="localhost:3308";
$username="root";
$password="";
$db_name="oldage";


$connect= mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");

$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Sugar_level = $_POST['Sugar_level'];
$BP_level = $_POST['BP_level'];
$Weight_kg= $_POST['Weight_kg'];
$Height_cm= $_POST['Height_cm'];
$Blood_type=$_POST['Blood_type'];
$Health_issue = $_POST['Health_issue'];
$Notes = $_POST['Notes'];

$sql="INSERT INTO medical_details(Id,Name,Sugar_level,BP_level,Blood_type,Weight_kg,Height_cm,Health_issue,Notes)
VALUES('$Id','$Name','$Sugar_level','$BP_level','$Blood_type','$Weight_kg','$Height_cm','$Health_issue','$Notes')";
$sql="INSERT INTO history(Id,Name,Sugar_level,BP_level,Blood_type,Weight_kg,Height_cm,Health_issue,Notes)
VALUES('$Id','$Name','$Sugar_level','$BP_level','$Blood_type','$Weight_kg','$Height_cm','$Health_issue','$Notes')";
$rs = mysqli_query($connect, $sql);
$rs = mysqli_query($connect, $sql);
if($rs)
{
header("Location:pills.html"); 
}
else
{
    echo "Error";
}
?>