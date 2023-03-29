<?php
include('database.php');
include('fetchdata.php')
?>
    <?php
    if(isset($history)>0)
    {
    ?>
    <table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Sugar_level</th>
        <th>BP_level</th>
        <th>Blood_type</th>
        <th>Weight_kg</th>
        <th>Height_cm</th>
        <th>Health_issue</th>
        <th>Notes</th>
    </tr>
    <?php
       if(count($history)>0)
       {
    $sn=1;
    foreach ($history as $history) {
     ?>
<tr>
    <td><?php echo $history['Id']; ?></td>
    <td><?php echo $history['Name']; ?></td>
    <td><?php echo $history['Sugar_level']; ?></td>
    <td><?php echo $history['BP_level']; ?></td>
    <td><?php echo $history['Blood_type']; ?></td>
    <td><?php echo $history['Weight_kg']; ?></td>
    <td><?php echo $history['Height_cm']; ?></td>
    <td><?php echo $history['Health_issue']; ?></td>
    <td><?php echo $history['Notes']; ?></td>
    
</tr>
     <?php
   $sn++; 
   }
}else{
    echo "<tr><td colspan='3'>No Data Found</td></tr>";
}
?>
</table>
<?php
}
?>