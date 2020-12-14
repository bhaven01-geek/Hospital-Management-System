<?php
// session_start();

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="patients";
$db_name2="dashboard";

$temp="Yes";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$conn)
{
    die("Connection failed: ".mysqli_connect_error());
}
$Ventilator = $_POST['vent'];

$conndash=mysqli_connect($db_host,$db_user,$db_password,$db_name2);

if($Ventilator==$temp)
{
  $sql = "UPDATE dashinfo SET admitted=admitted+1,beds=beds-1,vent=vent-1 WHERE id=0";
}
else{
  $sql = "UPDATE dashinfo SET admitted=admitted+1,beds=beds-1 WHERE id=0";
}

if ($conndash->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conndash->error;
}

$conndash->close();

$Patient_Name = $_POST['name'];
$Realtive_Name = $_POST['relative'];
$Gender = $_POST['gender'];
$Blood_Group = $_POST['blood'];
$Phone_No = $_POST['phone'];
$Address = $_POST['address'];
$relphone=$_POST['rcontact'];
$date=$_POST['date'];
$bed=$_POST['bed_no'];
$dr=$_POST['dr'];
$Symptoms = $_POST['symptoms'];
$b = implode(',',$Symptoms);


$qry = "INSERT INTO patients (PatientName,RelativeName,Gender,BloodGroup,Ventilator,Phone,Address,CurrentSymptoms,Rel_phone,Bed_no,dr_assign,date,status) VALUES ('$Patient_Name', '$Realtive_Name', '$Gender', '$Blood_Group', '$Ventilator', '$Phone_No', '$Address', '$b','$relphone','$bed','$dr','$date','In Hospital')";

if ($conn->query($qry) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $qry . "<br>" . $conn->error;
}

$conn->close();
header('location:DashB.php');

?>