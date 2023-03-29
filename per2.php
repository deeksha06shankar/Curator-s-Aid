<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>search</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>SEARCH HERE</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Dob</th>
                                    <th>Gaurdian_name</th>
                                    <th>Gaurdian_num</th>
                                    <th>Home_address</th>
                                    <th>DoJ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost:3308","root","","oldage");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM personal_details WHERE CONCAT(Id,Name,Gaurdian_name) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Id']; ?></td>
                                                    <td><?= $items['Name']; ?></td>
                                                    <td><?= $items['Dob']; ?></td>
                                                    <td><?= $items['Gaurdian_name']; ?></td>
                                                    <td><?= $items['Gaurdian_num']; ?></td>
                                                    <td><?= $items['Home_address']; ?></td>
                                                    <td><?= $items['DoJ']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php

$user = 'root';
$password = '';

$database = 'oldage';

$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = " SELECT * FROM personal_details ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #92a1d1;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #e8f4fa;
			border: 1px solid black;
		}
        th{
			background-color:#58bae4;
		}
		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Personal Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
            <th>Id</th>
                <th>Name</th>
                <th>Dob</th>
                <th>Gaurdian_name</th>
                <th>Gaurdian_num</th>
                <th>Home_address</th>
                <th>DoJoining</th>
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
                    <td>
                    <?php echo $rows['Id']; ?>
                </td>
                <td>
                    <?php echo $rows['Name']; ?>
                </td>
                <td>
                    <?php echo $rows['Dob']; ?>
                </td>
                <td>
                    <?php echo $rows['Gaurdian_name']; ?>
                </td>
                <td>
                    <?php echo $rows['Gaurdian_num']; ?>
                </td>
                <td>
                    <?php echo $rows['Home_address']; ?>
                </td>
                <td>
                    <?php echo $rows['DoJ']; ?>
                </td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>