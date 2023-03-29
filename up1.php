<?php
include_once 'database1.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE medical_details set Id='" . $_POST['Id'] . "', Name='" . $_POST['Name'] . "', Sugar_level='" . $_POST['Sugar_level'] . "',BP_level='" . $_POST['	BP_level'] ."'
Blood_type='" . $_POST['Blood_type'] ."',Weight_kg='" . $_POST['Weight_kg'] ."',Height_cm='" . $_POST['Height_cm'] ."',Health_issue='" . $_POST['Health_issue'] ."',Notes='" . $_POST['Notes'] ."'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM medical_details WHERE Id='" . $_POST['Id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
<style>
    @import "http://fonts.googleapis.com/css?family=Droid+Serif";



.maindiv {
    margin: 30px auto;
    width: 700px;
    height: 600px;
    background: #D2DAFF;
    padding-top: 20px;
    font-family: 'Droid Serif', serif;
    font-size: 14px
}

.title {
    width: 500px;
    height: 70px;
    text-shadow: 2px 2px 2px #cfcfcf;
    font-size: 16px;
    text-align: center
}

.form_div {
    width: 70%;
    float: left
}

form {
    width: 500px;
    border: 1px dashed #aaa;
    padding: 10px 30px 40px;
    margin-left: 70px;
    
}

form h3 {
    text-align: center;
    text-shadow: 2px 2px 2px #cfcfcf
}

textarea {
    width: 100%;
    height: 50px;
    border-radius: 1px;
    box-shadow: 0 0 1px 2px #123456;
    margin-top: 10px;
    padding: 7px;
    border: black;
}

.input {
    width: 100%;
    height: 30px;
    border-radius: 2px;
    box-shadow: 0 0 1px 2px #123456;
    margin-top: 10px;
    padding: 7px;
    border: none;
    margin-bottom: 20px
}

.submit {
    color: #fff;
    border-radius: 3px;
    background: #1F8DD6;
    padding: 5px;
    margin-top: 40px;
    border: none;
    width: 100%;
    height: 30px;
    box-shadow: 0 0 1px 2px #123456;
    font-size: 18px
}

p {
    color: red;
    text-align: center
}

span {
    text-align: center;
    color: green
}
</style>
</head>
<body>
<div class="maindiv">
        <div class="form_div">
            <div class="title">
                <h3>UPDATE FORM</h3>
            </div>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="update1.php">List</a>
</div>
Id: <br>
<input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>">
<input type="number" name="Id"  value="<?php echo $row['Id']; ?>">
<br>
Name: <br>
<input type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
<br>
Sugar_level :<br>
<input type="text" name="Sugar_level" class="txtField" value="<?php echo $row['Sugar_level']; ?>">
<br>
BP_level :<br>
<input type="text" name="BP_level" class="txtField" value="<?php echo $row['BP_level']; ?>">
<br>
Blood_type :<br>
<input type="text" name="Blood_type" class="txtField" value="<?php echo $row['Blood_type']; ?>">
<br>
Weight_kg :<br>
<input type="text" name="Weight_kg " class="txtField" value="<?php echo $row['Weight_kg ']; ?>">
<br>
Height_cm :<br>
<input type="text" name="Height_cm " class="txtField" value="<?php echo $row['Height_cm ']; ?>">
<br>
Health_issue :<br>
<input type="text" name="Health_issue" class="txtField" value="<?php echo $row['Health_issue']; ?>">
<br>
Notes :<br>
<input type="text" name="Notes " class="txtField" value="<?php echo $row['Notes ']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</div>
</div>
</body>
</html>