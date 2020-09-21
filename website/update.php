<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      
</head><body>
<?php include 'header1.php';?>

<div class="container">
<div class="row">
<div class="col-md-6 offset-md-3">
<h2 class="text-center py-5">
<u>UPDATE</u></h2>
<?php
$conn = mysqli_connect("localhost","root","","humantrafficinfo") or die("connection failed");

$reg_id = $_GET['id'];

$sql = "SELECT * FROM registrationinfo WHERE RId = {$reg_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccesfull");
if(mysqli_num_rows($result) > 0){
 while($row = mysqli_fetch_assoc($result)){


?>
<form action="updatepage.php" class="post-form" method="post">



    <div class="form-group">
    <label for="id"></label>
   <input type="HIDDEN" name="rid" value="<?php echo $row['RId']; ?>"></div>
   <div class="form-group">
    <label for="Username">Username</label>
     <input type="text" class="form-control" value="<?php echo $row['Rname']; ?>" id="uname" name="rname" required>
    </div>
    

  <div class="form-group">
  <label for="emailid">Email Address:</label>
  <input type="email" class="form-control" value="<?php echo $row['Remail']; ?>" id="emailid"  name="remail" required> 
  </div>

  <div class="form-group">
  <label for="mobile">Enter your phone number:</label><br>
	<input type="tel" class="form-control" value="<?php echo $row['Rphone']; ?>" required id="mobile" name="rphone">
  </div>
  
  <div class="form-group">
  <label for="gender">Gender:</label>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio"  name="rgender" value="<?php echo $row['Rgender']; ?>">
    <label class="custom-control-label" for="customRadio">MALE</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="rgender" value="<?php echo $row['Rgender']; ?>">
    <label class="custom-control-label" for="customRadio2">FEMALE</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="rgender" value="<?php echo $row['Rgender']; ?>">
    <label class="custom-control-label" for="customRadio3">TRANSGENDER</label>
  </div>

  <div class="form-group">
<label for="dob">Date Of Birth:</label>
    <input type="date" class="form-control" value="<?php echo $row['Rdob']; ?>" id="dob" name="rdob" required>
    </div>

  <div class="form-group">
    <label for="prfsn">Profession:</label>
    <input type="text" class="form-control" value="<?php echo $row['Rprofession']; ?>" id="prfsn"  name="rprofession" required>
    </div>
  
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" value="<?php echo $row['Raddress']; ?>" id="address"  name="raddress" required>
    </div>
    <div class="form-group">
    <a href="updatepage.php" class="btn btn-success" role="button">UPDATE</a></div>
  </div>
</form>
<?php 
 }
} ?>
 
  </html>