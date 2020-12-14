<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="patients";
$db_name2="dashboard";

$Patient_Name="";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$conndash=mysqli_connect($db_host,$db_user,$db_password,$db_name2);

    // $Patient_Name=$_POST['name'];
$date=$_POST['date'];
$bed=$_POST['bed'];
$dr=$_POST['dr'];
$Symptoms = $_POST['symptoms'];
$b = implode(',',$Symptoms);
$status_new=$_POST['status'];
$Ventilator = $_POST['vent'];

if($status_new!="In Hospital")
{
    $sql = "UPDATE dashinfo SET admitted=admitted-1,beds=beds+1 WHERE id=0";
    if ($conndash->query($sql) == TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conndash->error;
      }

      if($status_new=="RECOVERED")
      {
        $sql = "UPDATE dashinfo SET recovered=recovered+1 WHERE id=0";
        if ($conndash->query($sql) == TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conndash->error;
          }
      }
      if($status_new=="RECOVERED (Home Quarantine)")
      {
        $sql = "UPDATE dashinfo SET recovered=recovered+1 WHERE id=0";
        if ($conndash->query($sql) == TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conndash->error;
          }
      }
      if($status_new=="Deceased")
      {
        $sql = "UPDATE dashinfo SET deceased=deceased+1 WHERE id=0";
        if ($conndash->query($sql) == TRUE) {
            echo "Record updated successfully";
          } else {
            echo "Error updating record: " . $conndash->error;
          }
      }

}

$que="select * from patients where Bed_no='$bed' ";
$result=mysqli_query($conn,$que);

$row = $result->fetch_assoc();
$oldVent="";
if(isset($row['Ventilator']))
{
$oldVent= $row['Ventilator'];
}

if($oldVent=="Yes"&&$Ventilator=="No")
{
    $sql = "UPDATE dashinfo SET vent=vent+1 WHERE id=0";
    if ($conndash->query($sql) == TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conndash->error;
      }
}
else if($oldVent=="No"&&$Ventilator=="Yes")
{
    $sql = "UPDATE dashinfo SET vent=vent-1 WHERE id=0";
    if ($conndash->query($sql) == TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conndash->error;
      }
}
$conndash->close();
echo $Patient_Name;
$qrl = "UPDATE patients SET status='$status_new',date='$date',Ventilator='$Ventilator',Bed_no='$bed',dr_assign='$dr',CurrentSymptoms='$b' WHERE Bed_no='$bed'";
if ($conn->query($qrl) == TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
header('location:DashB.php');


?>