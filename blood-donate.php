<?php
error_reporting(0);
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phonenumber = $_POST['phno'];
$address = $_POST['address'];
$district = $_POST['district'];
$aadhar = $_POST['aadhar'];
$bloodgroup = $_POST['bloodgroup'];
$bloodunit = $_POST['unit'];
$date = $_POST['date'];


$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'test');
$sql = "select * from blood where aadhar = '$aadhar'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
//echo $num;echo '<br>';
if($num >= 1){
    echo "You are already registered!<br>";
    echo "Thank you! Donate Blood and save someone's life!";
} 
else{
    $reg = "insert into blood(name,gender,age,phonenumber,address,district,aadhar,bloodgroup,bloodunit,date) values('$name','$gender','$age','$phonenumber','$address','$district','$aadhar','$bloodgroup','$bloodunit','$date')";
    $a = mysqli_query($con,$reg);echo '<br>';
    echo "Registered successfully".$name." !!!";
}
?>