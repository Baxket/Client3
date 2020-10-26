<?php




 $old_path=getcwd();
 chdir('CS');
$output=shell_exec("sh initial.sh c97026 335138");

 chdir($old_path);
 echo "$output";
 
}

?>
