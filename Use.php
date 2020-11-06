<?php
$name=$_REQUEST['data'];
 

if($name != 0){
               $old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Use.sh");
                  chdir($old_path);
                
                  } 

?>

