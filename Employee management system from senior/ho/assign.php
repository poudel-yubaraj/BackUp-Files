<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Assign Project | Admin Panel | Employee Management System</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
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




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Assign Project</h2>
                    <form action="assignp.php" method="POST" enctype="multipart/form-data">


                        

                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Employee ID" name="eid" required="required">
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
<!-- end document-->
