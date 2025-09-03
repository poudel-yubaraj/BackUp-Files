<?php

require_once ('connection.php');

//$sql = "SELECT * from `employee_leave`";
$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token From employee, employee_leave Where employee.id = employee_leave.id order by employee_leave.token";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Leave | Admin Panel | Employee Management System</title>
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
		<table>
			<tr>
				<th>Emp. ID</th>
				<th>Token</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
				<th>Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['token']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"approve.php?id=$employee[id]&token=$employee[token]\" 
                     onClick=\"return confirm('Are you sure you want to Approve the request?')\">
                     Approve</a> | <a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" 
                     onClick=\"return confirm('Are you sure you want to Cancel the request?')\">
                     Cancel</a></td>";

				}


			?>

		</table>
		
	</div>
    <script src="js/global.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>