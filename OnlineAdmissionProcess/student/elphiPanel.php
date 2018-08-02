<?php 

include "../auth.php";


$email= $_SESSION['passing'];
$password =$_SESSION['passingpass'];
$dbservername = "sql136.main-hosting.eu";
$dbusername = "u445700667_elphi";
$dbpassword = "elphi123";
$dbname="u445700667_elphi";
$con = new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
    if($con->connect_error){
        die("Connection failed: " . $con->connect_error);
} 
        $dbmsg= "Connected successfully to database";
        
         $query="select * from studentregistration where email='$email' AND password='$password'";
         $res= mysqli_query($con, $query);
         $count= mysqli_num_rows($res);
         $data= mysqli_fetch_array($res);
         
         $name = $data['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EC online admission System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="admissionForm/forms.css" rel="stylesheet">
    <link href="admissionForm/style.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="admissionForm/css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="admissionForm/css/switchery.min.css">
  <script type="text/javascript" src="admissionForm/js/switchery.min.js"></script>
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">Elphinstone College</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a><i class="fa fa-home fa-fw"></i> Online Admission System</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $email ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
               

                <ul class="nav" id="side-menu">
                     <li>
                        
                    </li>
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="elphiPanel.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="elphiPanel.php?page=appliedcourse"><i class="fa-check-circle"></i> APPLIED COURSE </a>
                            </li>
                             <li>
                        <a href="elphiPanel.php?page=forms"><i class="fa fa-sitemap fa-fw"></i> APPLY NOW </a>
                            </li>
                    <!--<li>
                        <a href="elphiPanel.php?page=forms"><i class="fa fa-sitemap fa-fw"></i>APPLY NOW<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">BACHELOR OF SCIENCE IN INFORMATION AND TECHNOLOGY <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="elphiPanel.php?page=FYBSCIT">First Year of BSCIT</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="elphiPanel.php?page=forms">Second Year of BSCIT</a>
                                    </li>
                                </ul>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="elphiPanel.php?page=TYBSCIT">Third Year of BSCIT</a>
                                    </li>
                                </ul>
                            </li>
                           
                            
                        </ul>
                    </li>-->
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Welcome, <?php echo $name  ?>  </h4>
                </div>
            </div>

            <div>
                <P>
                    
                </P>
                <p>
                    <?php 
                    if(isset($_GET['page'])){
                        $p = $_GET['page'];
                        $page ="$p".".php";
                        if(file_exists($page)){
                            include ($page);
                        }
                    }
                    ?>
                </p>
            </div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
