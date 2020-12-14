<?php
session_start();
if(!isset($_SESSION['username']))
{
header('location:Login.html');
}
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="dashboard";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
$result=mysqli_prepare($conn,"SELECT * FROM dashinfo");
mysqli_stmt_bind_result($result,$id,$rec,$admit,$dec,$beds,$vent);

mysqli_stmt_execute($result);
mysqli_stmt_fetch($result);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
</head>


    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom" style="position: fixed;">
        <div class="container"><a class="navbar-brand" style="font-size:150%;">CITY HOSPITAL</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="DashB.php">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="RegisterPatients.html">ADD PATIENT DETAILS</a></li>
                    <li class="nav-item"><a class="nav-link" href="Logout.php">LOG OUT</a></li>
                    <form class="form-inline" action="data.php" method="POST">
                        <input name="filter" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <body >
     
    
    <div class="features-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="margin-top: 70px;color:black">CITY HOSPITAL DASHBOARD </h2>
            </div>
            <div class="row justify-content-center features">
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-heart icon"></i>
                        <h3 class="name">Recovered Patients : <?php echo $rec;?> </h3>
                        <!--p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a-->
                        </div>
                </div>
                
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    
                    <div class="box"><i class="fa fa-bed icon"></i>
                        <h3 class="name">Admitted Patients : <?php echo $admit;?> </h3>
                        <!--p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p--> 
                        <!-- <b><a class="learn-more" href="#"style="color:red";>Learn more »</a></b> -->
                    </div>
                
                </div>
           
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-ambulance icon"></i>
                        <h3 class="name">Deceased Patients : <?php echo $dec;?> </h3>
                        <!--p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a-->
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Beds Available : <?php echo $beds;?> </h3>
                        <!--p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a-->
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box">
                        <h3 class="name">Ventilators Available : <?php echo $vent;?></h3>
                        <!--p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a-->
                    </div>
                </div>
                <!--div class="col-sm-6 col-md-5 col-lg-4 item">
                    <div class="box"><i class="fa fa-phone icon"></i>
                        <h3 class="name">Mobile-first</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p><a class="learn-more" href="#">Learn more »</a></div>
                </div-->
            </div>
        </div>
    </div>

</body>
    <section></section>
    <section></section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>