<?php
$conn = mysqli_connect("localhost","root","","humantrafficinfo");
if($conn){
    echo "connection successful";
}

$rname = $_POST['rname'];
$remail = $_POST['remail'];
$rphone = $_POST['rphone'];
$rgender = $_POST['rgender'];
$rdob = $_POST['rdob'];
$rprofession = $_POST['rprofession'];
$raddress = $_POST['raddress'];

$sql = "INSERT INTO registrationinfo(Rname,Remail,Rphone,Rgender,Rdob,Rprofession,Raddress)  VALUES ('{$rname}','{$remail}','{$rphone}','{$rgender}', '{$rdob}', '{$rprofession}', '{$raddress}')";
$result = mysqli_query($conn, $sql) or die("query unsuceesful");
header('location:registrationdata.php');
mysqli_close($conn);
?>