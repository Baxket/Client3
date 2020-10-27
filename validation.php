<?php
/*
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'userregistration');
 $name=$_POST['user'];
 $pass=$_POST['password'];

 $s="select * from usertable where name='$name' && password='$pass'";
 $result=mysqli_query($con,$s);
 $num=mysqli_num_rows($result);
 if($num==1){
 	$_SESSION['username']=$name;
 	header('location:Userdetails.php');
 }
 else{
 	header('location:Userlogin.php');
 	
 }

?>*/

 if((isset($_POST['user'])) && !(empty($_POST['user']))&&(isset($_POST['password'])) && !(empty($_POST['password'])))
 {

 $name=$_POST['user'];
 $pass=$_POST['password'];

 $old_path=getcwd();
 chdir('CS');
$output="Succesful Validation of Client Device.
Serial_Number=381c1232-3k7-jhfnne4e4-za9ab027f
Device_Id=c97026
Username=c97026
Model_Id=c63781-gdbnsn-63167hdb
Manufacturer_Id=5345-1277hd-637ha
Region=Greater Accra Region
District=ablekuma Central Municipal
Operator=NCI
Latitude=6.68
Longitude=-1.6006
Antenna_Height=54
Device_Type=Fixed
Antenna_Height_Type=Above Ground Level
Available_Channels=62";

 chdir($old_path);
 echo "$output";
 $first_line = strtok($output,".");
 echo "$first_line";

 $fn = "status.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2);
fwrite($file, "1" );


$re = file_get_contents($fn);
//echo $str;
  //echo "string  $first_line";

 if($first_line == "Succesful Validation of Client Device" || $first_line == "Validation failed"){
 	 session_start();
             $_SESSION['username'] = $_POST['user'];
              $_SESSION['password'] = $_POST['password'];
              $_SESSION['output']= $output;
             

              header('location:Userdetails.php');
              session_write_close();
 	

 	
 	
 }
 else{echo "  ";



}


}

?>
