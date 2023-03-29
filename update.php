<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM pill_details");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style1.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class = "center">
	  <tr>
	    <td>Id</td>
		<td>Name</td>
		<td>pills_taken</td>
	  </tr><?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Id"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
		<td><?php echo $row["pills_taken"]; ?></td>
		<td class="oddrow"><a href="up.php?id=<?php echo $row["Id"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
</body>
</html>

