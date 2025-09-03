<?php

require_once ('connection.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,employee.dept,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table | Employee Record System</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
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
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Department</th>
                <th align = "center">Base Salary</th>
				
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					echo "<td>".$employee['dept']." </td>";
                    echo "<td>".$employee['base']."</td>";
					
					echo "<td>".$employee['total']." </td>";
					
					

				}


			?>
			
			</table>
			<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>