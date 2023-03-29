<?php
include_once 'database1.php';
$result = mysqli_query($conn,"SELECT * FROM medical_details");
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
<table>
	  <tr>
	    <td>Id</td>
		<td>Name</td>
		<td>Sugar_level</td>
        <td>BP_level</td>
		<td>Blood_type</td>
		<td>Weight_kg</td>
        <td>Height_cm</td>
		<td>Health_issue</td>
        <td>Notes</td>
	  </tr><?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["Id"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
        <td><?php echo $row["Sugar_level"]; ?></td>
		<td><?php echo $row["BP_level"]; ?></td>
		<td><?php echo $row["Blood_type"]; ?></td>
		<td><?php echo $row["Weight_kg"]; ?></td>
        <td><?php echo $row["Height_cm"]; ?></td>
		<td><?php echo $row["Health_issue"]; ?></td>
		<td><?php echo $row["Notes"]; ?></td>
		<td><a href="up1.php?id=<?php echo $row["Id"]; ?>">Update</a></td>
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

