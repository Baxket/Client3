<?php


 if((isset($_POST['user'])) && !(empty($_POST['user']))&&(isset($_POST['password'])) && !(empty($_POST['password'])))
 {

 $name=$_POST['user'];
 $pass=$_POST['password'];

 $old_path=getcwd();
 chdir('CS');
$output=shell_exec("sh initial.sh $name $pass");

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
