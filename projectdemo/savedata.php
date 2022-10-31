<?php
$donor_id=$_POST['donor_id'];
$name=$_POST['fullname'];
$number=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood'];
$address=$_POST['address'];
$loco_name=$_POST['loco'];
$conn=mysqli_connect("localhost","root","","blood_donation") or die("Connection error");
$sql="INSERT INTO donor_details(donor_name,donor_number,donor_mail,donor_age,donor_gender,donor_blood,donor_address,loco) values('{$name}','{$number}','{$email}','{$age}','{$gender}','{$blood_group}','{$address}','{$loco_name}')";
$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost/projectdemo/home.php");

mysqli_close($conn);
 ?>
