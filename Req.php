<?php
$name=$_REQUEST['data'];
echo "Response: ".$name;

      $fn = "Spec_Req.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, $name); 

if($name != 0){
               $old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Use.sh");
                  chdir($old_path);
                  } 

?>

