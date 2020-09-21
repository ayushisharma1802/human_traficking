<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		<style>
  /* Make the image fully responsive */
	.carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body>
<?php include 'header1.php';?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMAGES/dyou.jpg" alt="not available" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="IMAGES/hrc.jpg" alt="not available" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="IMAGES/Sms.jpg" alt="not available" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</header>
<!-- carousel ends -->


<!-- latest news -->
<section>
	
	<div class="container-fluid">
	<h1 class="text-center text-capitalize text-primary pt-4">LATEST NEWS</h1>
	<hr class="w-25 ">
	<h3 class="text-left text-capitalize text-primary pt-1">GUEST BLOG </h3>
	<p><h6><i>At Resue we love connecting with other organizations that are fighting human trafficking.The need is huge,
     and no one person or ministry can be the solution of this massive issue.</i></h6></p>	
	
	</div>
	
</section>

<!-- latest news ends -->

<!-- cards begin -->
<section>
<div class="container pt-4 mb-5 ">

  <div class="row text-center ml-5">
  <div class="col-lg-4 col-md-4 col-12">
  <div class="card img-fluid" style="width:300px">
    <img class="card-img-top" src="IMAGES/p.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <h1 class="card-title text-light ">DONATE</h1>
      <h3><p class="card-text text-light">Help Our Cause</p></h3>
      <a href="#">
	  <div class="container">
 <!-- Button to Open the Modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
    Donate
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">DONATION FORM</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container text-left">
  <form action="header.php" onsubmit="return validation()">
    <div class="form-group">
	<label for="name">Donor Name:</label>
	<input type="text" class="form-control " id="donor" placeholder="Enter full name" name="name" autocomplete="off">
      <span id="donors" class="text-danger" font-weight-bold"></span>
      
      </div>
      <div>
      
      <label for="email">Email:</label>

      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
      
    </div>
    <div class="form-group">
      <label for="city">Address:</label>
      <input type="text" class="form-control" id="address" placeholder="address" name="City">
      
    </div>
	<label for="phone">Enter your phone number:</label>
	<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    <div class="form-group form-check">
      <label class="form-check-label">
      </div>

      <div class="form-group">
      <label for="donation">Donation Amount($):</label>
      <input type="text" class="form-control" id="amount"  name="donation">
     </div>
     <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

<div class="form-group">
<div class="form-group">
<label>Verification No.</label>
<div class="input-group">
<input type="text" id="capta_code" class="form-control" name="capta">
<span class="input-group-addon" style="padding:0">
<img src="img.php" id="captaimage"></span>



</div>

</div>
</div>
      
  </form>
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Donate</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
    </a>
    </div>
    </div>
	</div>
	</div>
	
  <div class="col-lg-4 col-md-4 col-12">
	 <div class="card img-fluid" style="width:300px">
    <img class="card-img-top" src="IMAGES/v.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <h1 class="card-title text-light ">VOLUNTEER</h1>
      <h3><p class="card-text text-light">Become a Part</p></h3>
      <a href="#">
	  <div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Join Now
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">RESCUE.orG</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container text-left">
  <form action="header.php" onsubmit="return validation()">
    <div class="form-group">
	<label for="name">Name:</label>
	<input type="text" class="form-control " id="user" placeholder="Enter full name" name="name" autocomplete="off">
      <span id="name" class="text-danger" font-weight-bold"></span>
      
      </div><div>
      
      <label for="email">Email:</label>

      <input type="email" class="form-control" id="emailid" placeholder="Enter email" name="email" autocomplete="off">
      <span id="email" class="text-danger" font-weight-bold"></span>
    </div>
    <div class="form-group">
      <label for="city">City You Live In:</label>
      <input type="text" class="form-control" id="cityname" placeholder="PRAYAGRAJ" name="City">
      <span id="city" class="text-danger" font-weight-bold"></span>
    </div>
	<label for="phone">Enter your phone number:</label>
	<input type="tel" id="phonenumber" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    <div class="form-group form-check">
      <label class="form-check-label">
      <span id="phone" class="text-danger" font-weight-bold"></span></div>
      <div>
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </a>
</div>

    </div>
	</div>
	</div>
	
  <div class="col-lg-4 col-md-4 col-12">
	 <div class="card img-fluid" style="width:300px">
    <img class="card-img-top" src="IMAGES/1.jpg" alt="Card image" style="width:100%">
    <div class="card-img-overlay">
      <h1 class="card-title text-light">EVENTS</h1>
      <h3><p class="card-text text-light">Stay Updated</p></h3>
   <a href="#">
	  <div class="container">
  
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
    Wanna know
  </button>

 <!-- The Modal -->
 <div class="modal" id="myModal3">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">UPCOMING EVENTS</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

   <!-- Modal body -->
   <div class="modal-body">
        <p>Webinar on Human trafficking the male population on 20 sept,2020</p>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</a>
  </div>    
	</div>
	</div>
	 
</section>

<!-- cards ends -->


<!-- informed start -->
<section class="bg-primary py-3 mb-5">
	<article class="py-3 text-white ml-5">
	<div>

<div class="col-lg-4 col-md-4 col-10 d-block">
	<form class="form-inline" action="/action_page.php">
	<label for="email"><h3>STAY INFORMED:</h3></label>
  <input type="text" class="form-control " placeholder="Enter name" name="name">
  <div class="col-lg-4 col-md-4 col-12">
  <input type="password" class="form-control" placeholder="Enter email" id="email">
  <div class="form-check">
    
  </div>
  <button type="submit" class="btn btn-warning ml-5">Submit</button>
</form>

</div> 
</article>
</section>

<footer>
   <p class="text-center bg-dark text-white">@copyright RESCUE.orG 2020</P> 
</footer>



	<script type="text/javascript">
function validation(){
  var user = document.getElementById('user').value;
  var email = document.getElementById('emailid').value;
  var city = document.getElementById('cityname').value;
  var phone = document.getElementById('phonenumber').value;

  if(user == ""){
    document.getElementById('name').innerHTML ="**Please fill the name field";
   return false;
  }
if(user.length <=2){
  document.getElementById('name').innerHTML ="**Please enter the name between 2 and 20";
   return false;
}
if(!NAN(user))

  if(email == ""){
    document.getElementById('email').innerHTML ="**Please enter your email-id";
   return false;
  }
  if(city == ""){
    document.getElementById('city').innerHTML ="**Please enter your city";
   return false;
  }
  if(phone == ""){
    document.getElementById('phone').innerHTML ="**Please enter your mobile number";
   return false;
  }

}



</script>
</body>
</html>
