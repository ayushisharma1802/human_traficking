<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
        <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head><body>
<?php include 'header1.php';?></body>
<h2 class="text-center py-5">
<u>REGISTRATION INFO</u></h2>
<?php 
$conn = mysqli_connect("localhost","root","","humantrafficinfo") or die("connection failed");
$sql = "SELECT * FROM registrationinfo";
$result = mysqli_query($conn, $sql) or die("query unsuccesfull");
if(mysqli_num_rows($result) > 0){
?>
<table class="table">
  <thead>
    <th>Id</th>   
    <th>Name</th>
    <th>Email</th>
    <th>Phone No.</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Profession</th>
    <th>Address</th>
    <th>update</th>
    <th>Delete</th>
  </thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
  <tr>
    <td data-label="Id"><?php echo $row['RId'];?></td>
    <td data-label="Name"><?php echo $row['Rname'];?></td>
    <td data-label="Email"><?php echo $row['Remail']; ?></td>
    <td data-label="Phone No."><?php echo $row['Rphone'];?></td>
    <td data-label="Gender"><?php echo $row['Rgender']; ?></td>
    <td data-label="DOB"><?php echo $row['Rdob'];?></td>
    <td data-label="Profession"><?php echo $row['Rprofession']; ?></td>
    <td data-label="Address"><?php echo $row['Raddress']; ?></td>
    <td data-label="Update"><a href="update.php?id=<?php echo $row['RId'];?>" class="btn btn-success" role="button" >update</a>

  </button></td>
  <td data-label="Delete"><a href="delete.php?id=<?php echo $row['RId'];?>" class="btn btn-danger" role="button onclick=mydelete()">delete</a>

  </button></td>
  </tr>
<?php } ?>
</table>
<?php } ?>
<script type="text/javascript">
mydelete(){
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>


</html>