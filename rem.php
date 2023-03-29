<?php
include("database.php");
?>
<form action="" method="post">
<select name="Id">
    <option value="">Select Id</option>
    <?php 
    $query ="SELECT * FROM history";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['Id'];
    ?>
    <option value="<?php echo $Id; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<input type="submit" name="submit">
</form>
