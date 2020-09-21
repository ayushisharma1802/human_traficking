<!DOCTYPE html>
<html>
<head>
<title>get involved</title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include 'header1.php';?>
<div class="container">
<div class="row" id="involve">
<div class="col-md-6 offset-md-3" id="form">
<center><b id="registration" data-toggle="tooltip" title="fill the required information">REGISTRATION FORM</b></center>

<form action="registrationinfo.php" method="post" class="was-validated post-form">
<div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" value="" id="uname" placeholder="Enter username" name="rname" required>
    
  </div>
  <div class="form-group">

  <label for="emailid">Email Address:</label>
  <input type="email" class="form-control" value="" id="emailid" placeholder="Enter email" name="remail" autocomplete="on" required> 
  </div>
  <div class="form-group">
  <label for="mobile">Enter your phone number:</label><br>
	<input type="tel" class="form-control" value="" required id="mobile" name="rphone">
  </div>
  
  <div class="form-group">
  <label for="gender">Gender:</label>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio"  name="rgender" value="male">
    <label class="custom-control-label" for="customRadio">MALE</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio2" name="rgender" value="female">
    <label class="custom-control-label" for="customRadio2">FEMALE</label>
  </div>
  <div class="custom-control custom-radio custom-control-inline">
    <input type="radio" class="custom-control-input" id="customRadio3" name="rgender" value="transgender">
    <label class="custom-control-label" for="customRadio3">TRANSGENDER</label>
  </div>
  
  


<div class="form-group">

<label for="dob">Date Of Birth:</label>
    <input type="date" class="form-control" value="" id="dob" placeholder="" name="rdob" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback"></div>
  </div>

  <div class="form-group">
    <label for="prfsn">Profession:</label>
    <input type="text" class="form-control" value="" id="prfsn" placeholder="Profession" name="rprofession" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback"></div>
  </div>

  <div class="form-group">
    <label for="adrs">Address:</label>
    <input type="text" class="form-control" value="" id="adrs" placeholder="Enter your address" name="raddress" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback"></div>
  </div>

  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" required> I confirm that the information given in this form is true complete and accurate.
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
 <div> <button  type="submit" class="btn btn-primary" data-toggle="tooltip" title="click here to submit your registration form">Submit</button></div>
 <hr></hr>
 <p>Already Have An Account?</p>
 <div class="py-3"><a href="registrationdata.php" class="btn btn-danger" role="button">click here to know details of Registered candidates.</a></div>
</form>

</div>
</div>
</div>
<div class="my-5">
<div class="container"><?php include 'footer.php';?></div></div>





</body>
</html>