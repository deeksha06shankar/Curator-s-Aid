<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
</head>

<body>

    <div class="topnav">
        <a href="#about" class="split">CURATOR'S AID</a>
        <a href="reminder.html" class="google">Reminder</a>
        <div class="dropdown">
            <button class="dropbtn">Update
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="update.php">Pill Details</a>
                <a href="update1.php">Medical Details</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">New
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="ins.html">Personal Details</a>
                <a href="add1.html">Medical Details</a>
                <a href="pills.html">Pill Details</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Info
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="per2.php">Personal Details</a>
                <a href="medicaltab.php">Medical Details</a>
                <a href="pill.php">Pill Details</a>
            </div>
        </div>
        <a href="#home" class="google">Home</a>
    </div>


    <footer>
        <div class="formadd">
            <div class="foot">
                <a href="https://www.instagram.com/" class="insta" target="_blank">
                <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.facebook.com/" class="fb" target="_blank">
                    <i class="footer-icon fab fa-facebook-f fa-0.5x icon"></i>
                </a>
                <a href="https://www.twitter.com/" class="twtr" target="_blank">
                    <i class="footer-icon fab fa-twitter fa-0.5x icon"></i>
                </a>
                <a href="https://mail.google.com/" class="mail" target="_blank">
                    <i class="footer-icon fas fa-envelope fa-0.5x icon"></i>
                </a>
            </div>
            <div class="add">
                <h3>CURATOR'S AID</h3>
                <h5>Thiruparankundram,</h5>
                <h5>Madurai,630125,</h5>
                <h5>Tamil Nadu</h5>
                <h5>9558487564</h5>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/65bc7f4f38.js" crossorigin="anonymous"></script>
</body>

</html>

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
   $d = strtotime($d . "-1 month");
   $d = date('Y-m-d', $d);
   $sql = "SELECT * FROM personal_details where Id in (SELECT p_id FROM remainder where rem_date = '$d')";
   $result = mysqli_query($conn, $sql);
   $v= date("Y-m-d");
$v = strtotime($v . "-1 month");
$v = date('Y-m-d', $v);
$v = strtotime($v . "-1 day");
$v = date('Y-m-d', $v);

$td = date("Y-m-d");
$td = strtotime($td . "-1 day");
$td = date('Y-m-d', $td);

$sql = "UPDATE remainder SET rem_date = '$td' WHERE rem_date = '$v'";
$r = mysqli_query($conn, $sql);
?>
   <div id="popup" class="popup">
    <?php
   foreach($result as $row) {
    echo "<p>".$row['Name']."</p>";
    
   }
  ?>
  <!--
  <button id="close">click me</button>-->

</div>
<button id="close">NOTIFY!!</button>
 <script>
    
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        10
    )
});
document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
        
</script>
</html>