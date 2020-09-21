<?php
echo $rid = $_GET['id'];
$conn = mysqli_connect("localhost","root","","humantrafficinfo") or die("connection failed");
$sql = "DELETE FROM registrationinfo WHERE RId = {$rid}";
$result = mysqli_query($conn, $sql) or die("query unsuccesfull");
header('location:registrationdata.php');
mysqli_close($conn);
?>

?>