<?php

$conn = mysqli_connect("localhost","root","","humantrafficinfo");
if($conn){
    echo "connection successful";
}
 echo $rid = $_POST['rid'];
echo $rname = $_POST['rname'];
$remail = $_POST['remail'];
$rphone = $_POST['rphone'];
$rgender = $_POST['rgender'];
$rdob = $_POST['rdob'];
$rprofession = $_POST['rprofession'];
$raddress = $_POST['raddress'];
$sql ="UPDATE registrationinfo SET Rname ='{$rname}', Remail ='{$remail}', Rphone ='{$rphone}', Rgender = '{$rgender}', Rdob ='{$rdob }' , Rprofession ='{$rprofession}', Raddress ='{$raddress}' ,WHERE RId={$rid }";

$result = mysqli_query($conn, $sql) or die("query unsuceesful");

mysqli_close($conn);
?>




?>