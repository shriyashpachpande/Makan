<?php
include("config.php");
if(isset($POST['submit']))
{
    $fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$mnumber = $_POST['mnumber'];
$onumber = $_POST['onumber'];
$age = $_POST['age'];
$Religion = $_POST['Religion'];
$gender = $_POST['gender'];

$marital = $_POST['marital'];
$state = $_POST['state'];
$District = $_POST['District'];
$taluka = $_POST['taluka'];
$village = $_POST['village'];
$pincode = $_POST['pincode'];
$address = $_POST['address'];


$result=mysqli_query($mysqli,"INSERT into registration values('','$fname', '$lname', '$email', '$dob', '$mnumber', '$onumber', '$age', '$Religion', '$gender', '$marital', '$state', '$District', '$taluka', '$village', '$pincode', '$address')");

if($result)
{
    echo "Success";
}
else{
    echo "Failed";
}
}

?>