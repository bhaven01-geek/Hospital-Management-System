<?php 
include("config.php");
if( isset($_POST['filter']) ){
    $name = mysqli_real_escape_string($conn,htmlspecialchars($_POST['filter']));
    $sql = "SELECT * FROM patients WHERE PatientName = '$name'";
}
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        table{
            margin-left: 400px;
        }
        table,tr,th,td{
            margin: auto
            border : 1px solid black;
            position: relative;
            top: 20px;
        }
    </style>
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom" style="position: fixed;">
        <div class="container"><a class="navbar-brand" style="font-size:150%;">CITY HOSPITAL</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="DashB.php">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="Logout.php">LOG OUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="RegisterPatients.html">New Patient</a></li>
                    <form class="form-inline" method="POST" action="data.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="filter">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</form>
<h2><center>Patient Details</center></h2>
<br>
<br>
<table class="table table-striped table-responsive">
    <?php
    while($row = $result->fetch_assoc()){
        ?>
        <tr><th>Patient Name :</th>
            <td><?php echo $row['PatientName']; ?></td></tr>
            <tr><th>Status :</th>
            <td><?php echo $row['status']; ?></td></tr>
       
        <tr><th>Gender :</th>
            <td><?php echo $row['Gender']; ?></td></tr>
        <tr><th>Address :</th>
            <td><?php echo $row['Address']; ?></td></tr>
        <tr><th>Phone :</th>
            <td><?php echo $row['Phone']; ?></td></tr>
        <tr><th>Blood Group :</th>
            <td><?php echo $row['BloodGroup']; ?></td></tr>
        <tr><th>Date Of Covid-19 Test :</th>
            <td><?php echo $row['date']; ?></td></tr>
        <tr><th>Bed-No :</th>
            <td><?php echo $row['Bed_no']; ?></td></tr>
            <tr><th>On Ventilator: </th>
            <td><?php echo $row['Ventilator']; ?></td></tr>
        <tr><th>Supervison Doctor :</th>
            <td><?php echo $row['dr_assign']; ?></td></tr>
        <tr><th>Symptoms :</th>
            <td><?php echo $row['CurrentSymptoms']; ?></td></tr>
            <tr><th>Relative Name : </th>
            <td><?php echo $row['RelativeName']; ?></td></tr>
        <tr><th>Relative Phone no :</th>
            <td><?php echo $row['Rel_phone']; ?></td></tr>


        <?php
        echo"
        <tr>
        <td><a href ='EditPat.php?name=$row[PatientName]&date=$row[date]&vent=$row[Ventilator]&bed=$row[Bed_no]'>Update</td><tr>";
    }
    ?>
</table>
</div>
</body>
</html>