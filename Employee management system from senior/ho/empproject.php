<?php 
require_once ('connection.php');
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('connection.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>



<html>
<head>
	<title>Employee Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		
<header>
        <nav>
            <h1>ERS</h1>
            <div class="navli">
            <ul>
                
                <li>
                    <a href="eloginwel.php?id=<?php echo $id?>">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="myprofile.php?id=<?php echo $id?>">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="empproject.php?id=<?php echo $id?>">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">My Project</span>
                    </a>
                </li>
                <li>
                    <a href="applyleave.php?id=<?php echo $id?>">
                        <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                        <span class="title">Apply Leave</span>
                    </a>
                </li>
                <li>
                    <a href="alogin.html">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        </nav>
    </header>

	 
	<div class="divider"></div>
	<div id="divimg">


		<table>
			<tr>

				<th align = "center">Project ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Sub Date</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['status']."</td>";
					

					 echo "<td><a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Submit</a>";

				}


			?>

		</table>

		</body>
</html>