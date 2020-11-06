<?php
$name=$_REQUEST['data'];
echo "Response: ".$name;

      $fn = "Spec_Req.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, $name); 


?>

