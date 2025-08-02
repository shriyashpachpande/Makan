<?php
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


$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error)
}
else{
    $stmt = $conn->prepare("insert into registration(fname, lname, email, dob, mnumber, onumber, age, Religion, gender, marital, state, District, taluka, village, pincode,address )
    values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssiiiisssssssis",$fname, $lname, $email, $dob, $mnumber, $onumber, $age, $Religion, $gender, $marital, $state, $District, $taluka, $village, $pincode, $address);
    $stmt->execute();
    echo "Registration Successfully...";
    $stmt->close();
    $conn->close();
}