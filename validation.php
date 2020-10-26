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
$output=shell_exec("sh initial.sh $name $pass");

 chdir($old_path);
 echo "$output";
 

 	


}

?>
