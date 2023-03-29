<?php
$host="localhost:3308";
$username="root";
$password=""
$db_name="oldage";
$tbl_name="personal_details";

$connection = mysqli_connect("$host", "$username", "$password", "$db_name") or die("cannot connect");
session_start();
extract($_POST);
$Id = $_POST['Id'];
$Name = $_POST['Name'];
$Dob = $_POST['Dob'];
$Gaurdianname = $_POST['Gaurdian_name'];
$Gaurdiannum = $_POST['Gaurdian_num'];
$Homeaddress = $_POST['Home_address'];
$DoJ = $_POST['DoJ'];
echo $DoJ;
$query ="INSERT INTO personal_details(Id,Name,Dob,Gaurdian_name,Gaurdian_num,Home_address,DoJ) VALUES ('$Id','$Name','$Dob','$Gaurdianname','$Gaurdiannum','$Homeaddress','$DoJ')";
$rs = mysqli_query($connection, $query);
if($rs){
header("Location:add1.html");
}
else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
?>