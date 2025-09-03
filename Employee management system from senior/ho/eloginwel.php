<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('connection.php');
	 $sql1 = "SELECT * FROM `employee` where id = '$id'";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
	 $empName = ($employeen['firstName']);

	$sql = "SELECT * FROM `employee` where id = '$id'";
	$sql1 = "SELECT `pname`, `duedate` FROM `project` WHERE eid = $id and status = 'Due'";

	$sql2 = "Select * From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";


$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);

?>



<html>
<head>
	<title>Employee Panel | Employee Management System</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
<header>
        <nav>
            <h1>ERS</h1>
            <div class="navli">
            <ul>
                
                <li>
				<a  href="eloginwel.php?id=<?php echo $id?>">
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
	<div>
		<!-- <h2>Welcome <?php echo "$empName"; ?> </h2> -->

		    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Your Record Leaderboard </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Departments</th>
				

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
   
    	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Due Projects</h2>
    	

    	<table>

			<tr>
				<th align = "center">Seq.</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				
			</tr>

			

			<?php
            $sequ = 1;
				while ($employee1 = mysqli_fetch_assoc($result1)) {
					echo "<tr>";
					
					echo "<td>".$sequ."</td>";
					echo "<td>".$employee1['pname']."</td>";
					
					echo "<td>".$employee1['duedate']."</td>";
                    $sequ+=1;
				}


			?>

		</table>


		</table>










		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Leave Satus</h2>
    	

    	<table>

			<tr>
				<th align = "center">Seq.</th>
				<th align = "center">Start Date</th>
				<th align = "center">End Date</th>
				<th align = "center">Total Days</th>
				<th align = "center">Reason</th>
				<th align = "center">Status</th>
			</tr>

			

			<?php
            $seqe = 1;
				while ($employee = mysqli_fetch_assoc($result2)) {
					$date1 = new DateTime($employee['start']);
					$date2 = new DateTime($employee['end']);
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					
					echo "<td>".$seqe."</td>";
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					$seqe+=1;
				}


				


			?>

		</table>




   
<br>
<br>
<br>
<br>
<br>







	</div>


		</h2>

		
		
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>    
</body>
</html>