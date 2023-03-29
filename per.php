<?php
$host="localhost:3308";
$username="root";
$password="";
$db_name="oldage";

$con=mysqli_connect($host,$username,$password,$db_name) or die("cannot connect");


if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    $selectQuery = "SELECT * FROM `personal_details` ";
    $result = mysqli_query($con,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }
    else{
        $msg = "No Record found";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>personal</title>
</head>

<body>

    <h1>Personal Details</Details>
    </h1>
    <?=$msg;?>
    <table border="1px" style="width:600px; line-height:40px;align-items: center;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Dob</th>
                <th>Gaurdian_Name</th>
                <th>Gaurdian_num</th>
                <th>Home_address</th>
                <th>DoJoining</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){?>
            <tr>
                <td>
                    <?php echo $row['Id']; ?>
                </td>
                <td>
                    <?php echo $row['Name']; ?>
                </td>
                <td>
                    <?php echo $row['Dob']; ?>
                </td>
                <td>
                    <?php echo $row['Gaurdian_name']; ?>
                </td>
                <td>
                    <?php echo $row['Gaurdian_num']; ?>
                </td>
                <td>
                    <?php echo $row['Home_address']; ?>
                </td>
                <td>
                    <?php echo $row['DoJ']; ?>
                </td>
            <tr>
                <?}?>
        </tbody>
    </table>
</body>
</html>