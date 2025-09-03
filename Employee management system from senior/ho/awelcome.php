<?php 
require_once ('connection.php');
$sql = "SELECT id, firstName, lastName, dept FROM employee";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	<title>Admin Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>ERS</h1>
			<div class="navli">
            <ul>
                
                <li>
                    <a href="awelcome.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li>
                    <a href="addemp.php">
                        <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                        <span class="title">Add Employee</span>
                    </a>
                </li>
                <li>
                    <a href="viewemp.php">
                        <span class="icon"><ion-icon name="eye-outline"></ion-icon></span>
                        <span class="title">View Employee</span>
                    </a>
                </li>
                <li>
                    <a href="assign.php">
                        <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                        <span class="title">Assign Project</span>
                    </a>
                </li>
                <li>
                    <a href="assignproject.php">
                        <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>
                        <span class="title">Project Status</span>
                    </a>
                </li>
                <li>
                    <a href="salaryemp.php">
                        <span class="icon"><ion-icon name="logo-usd"></ion-icon></span>
                        <span class="title">Salary Table</span>
                    </a>
                </li>
                <li>
                    <a href="empleave.php">
                        <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                        <span class="title">Employee Leave</span>
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
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Employee Leaderboard </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
                <th align = "center">Department</th>
				
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";

                    echo "<td>".$employee['dept']."</td>";
					
					
					$seq+=1;
				}


			?>

		</table>

		

		
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>