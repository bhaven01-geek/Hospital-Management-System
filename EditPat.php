
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Patient's Details</title>
    
    <meta name='viewport' content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- JS & CSS library of MultiSelect plugin -->
<script src="multiselect/jquery.multiselect.js"></script>
<link rel="stylesheet" href="multiselect/jquery.multiselect.css">

    
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/form.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

<!--link rel="stylesheet" href="assets/css/Style.css"-->

</head>

<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom" style="position: fixed;">
  <a class="navbar-brand" style="font-size:150%; margin-left: 9%;">CITY HOSPITAL</a>
      <button data-toggle="collapse" class="navbar-toggler" data-target="#navbarResponsive"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="DashB.php">DASHBOARD</a></li>
              <li class="nav-item"><a class="nav-link" href="Logout.php">LOG OUT</a></li>
          </ul>
      
  </div>
</nav>

<body>
    
    <form action ="update.php" method="POST" >  
        <div class="container">  
          <div class="intro">
            <h2 class="text-center" style="margin-top: 70px;">PATIENT'S DATA</h2>
        </div>
        <h6>  
          <div>
        <label >PATIENT'S NAME : </label>   
      <input name="name" type="text" value="<?php echo $_GET['name']; ?>" placeholder= "Patient's Name"  size="15" disabled/>  
      <table style="margin-top: -45px;"cellpadding="6">
                  
            <tr>  
              <td><br><br><label>PATIENT'S HEALTH STATUS : </label>    </td> 
              <td>
                <br><br>
                <select name="status"  style="background-color: lightgrey;border:none;height:40px"> 
                <option>In Hospital</option>
                  <option>RECOVERED</option>  
                  <option>RECOVERED (Home Quarantine)</option>  
                  <option>Deceased</option>
                  
                  
                </select> 
              </td>
          </tr>
          <tr>
            <td><br><br><label>DATE OF COVID-19 TEST</label></td>
            <td><br><br><input name="date" value="<?php echo $_GET['date']; ?>" type="date"style="background-color: lightgrey;border:none;height:40px"required/></td>
          </tr>
           
            <tr>
              <td><br><br><label> VENTILATOR NEEDED ? : </label></td>
            
              <td><br><br><input type="radio" value="Yes" name="vent" checked > YES  </td>     
              <td><br><br><input type="radio" value="No" name="vent" > NO </td>
              <br><br>
            </tr>

            <tr>
              <td><br><br>BED NO.</td>
              <td><br><br><input name="bed" value="<?php echo $_GET['bed']; ?>" type="text"required/></td>
            </tr>

            <br><br>
            <tr>
              <td><br><br> <label>DOCTOR ASSIGNED : </label></td>
                    
            
              <td><br><br>
              <select name="dr" style="background-color: lightgrey;border:none;height:40px"> 
                
              <option>DR. MAHESH</option>
                  <option>DR. SAWANT</option>
                  <option>DR. RATHOD</option> 
                  <option>DR. KAILASH</option> 
                  </select> 
                </td>
          </tr>

          <tr>
            <td><label>CURRENT COVID SYMPTOMS : </label> </td> 
              
            <td><br> <br>
            <input type="checkbox" class ="sym" name="symptoms[]" value="Fever">Fever<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Dry Cough">Dry Cough<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Shortness Of Breath">Shortness Of Breath<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Chest Pain">Chest Pain<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Diarrhoea">Diarrhoea<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Sore throat">Sore throat<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Loss of Taste">Loss of Taste<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Head Ache">Head Ache<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="Body Ache and Pain">Body Ache and Pain<br>
              <input type="checkbox" class ="sym" name="symptoms[]" value="None">None<br>
        </td>
        </tr>
</table>
  <br><br>

            <button type="submit" class="registerbtn">UPDATE DETAILS</button>   </h6>  
      </form>  
      
</div>

</body>
</html>