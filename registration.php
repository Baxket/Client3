<?php
session_start();
 header('location:index.php');
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'userregistration');
 $name=$_POST['username'];
 $pass=$_POST['pass'];
 $serialnumber=$_POST['serialnumber'];
 $manufacturerid=$_POST['manufacturerid'];
 $modelid=$_POST['modelid'];
 $devicetype=$_POST['devicetype'];
 $longitude=$_POST['longitude'];
 $latitude=$_POST['latitude'];
 $region=$_POST['region'];
 $district=$_POST['district'];
 $phonenumber=$_POST['phonenumber'];
 $antennaheight=$_POST['antennaheight'];
 $antennaheighttype=$_POST['antennaheighttype'];

 $s="select * from usertable where name='$name'";
 $result=mysqli_query($con,$s);
 $num=mysqli_num_rows($result);
 if($num==1){
 	echo "Username Already Exist";
 }
 else{
 	$reg="insert into usertable(name,password,serialnumber,manufacturerid,modelid,devicetype,latitude,longitude,region,district,phonenumber,antennaheight,antennaheighttype) values ('$name','$pass','$serialnumber','$manufacturerid','$modelid','$devicetype','$latitude','$longitude','$region','$district','$phonenumber','$antennaheight','$antennaheighttype')";
 	mysqli_query($con,$reg);
 	echo" Registration Successful";
 }
 

?>