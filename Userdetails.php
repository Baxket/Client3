

<?php

 session_start();


include 'validation.php';


if (  $_SESSION['username']  == null ||  $_SESSION['password'] == null) {
    header("location: index.php");
    exit();
}
global $var;
$GLOBALS['var']!="Y";
 $name=$_SESSION['username'];
 $pass=$_SESSION['password'];


$output=$_SESSION['output'];

 $first_line = strtok($output,".");
 $word = "Available Channels:0";

$a = "status.php";
$r = file_get_contents($a);
//echo $str;
  //echo "string  $first_line";
 ?>
<?php


 
?>
<!DOCTYPE html>
<html>

<head>
    <title>Client Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="dp.png">

    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Loader.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <style>
    
         body {
            font-family: "Mitr", sans-serif;
            background-image: url('TVWS.jpg');
        }
        <?php include 'style_1.css' ?>
  
    
    </style>

</head>


<body>
	  <div class="header">
        <p>TVWS Client</p>
        <form method ="post">
        <button name="logout" id="logout" class="button-logout"  role="button">Log out</button>

</form>

<?php

if(isset($_POST['logout']))
{

$old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Logout.sh");
                  chdir($old_path); 


    $fn = "variables.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, "0");

    $fn = "variables2.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, "0");

    $f = "time.php"; 
$file = fopen($f, "w+"); 
$size = filesize($f); 
$text = fread($file, 2); 
fwrite($file, "0");
echo("<script>location.href = 'index.php';</script>");
exit(); 
} ?>
    </div>

   <div  class="container">
    	 <?php 
   preg_match('#([^<\>]+)#m', $output, $response);
   echo $response[0];
   echo "<br>";
   if ($response[0] == "Succesful Validation of Client Device.") {
      preg_match('#([^<\>]+)Available_Channels=([^<\>]+)#m', $output, $channel);
      echo "Available Channels = ";
   echo $channel[2];
   ?>
  <?php

   //echo "<script>document.write();</script>";

   }
  
   ?>
    <!--<div class="loader"></div> -->

  <?php

  ?>

        

    </div>
    <!-- TABLE -->
    <div>
    <table  id="table">
    <t>
       <?php

if ($response[0] == "Succesful Validation of Client Device.") {
    ?>
    <tr>
    <th>Channel number</th>
   <td>  <?php 


                  if($r == 1)
                  {
                       $old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Req.sh");
                  chdir($old_path); 
                   preg_match('#([^<\>]+)Channel=([^<\>]+)#m', $output3, $match1);
                   preg_match('#([^<\>]+)stopTime=([^<\>]+)#m', $output3, $time);
                     preg_match('#([^<\>]+)Transmit_Power=([^<\>]+)#m', $output3, $match2);

                   if($match1[2]!=0)
                   {
               $old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Use.sh");
                  chdir($old_path); 
                   }


 $fn = "time.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2);
 

fwrite($file, $time[2] ); 
  
      $fn = "variables.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, $match1[2]); 

			  
      $fn = "Spec_Req.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, 1);

    $fa = "variables2.php"; 
$file = fopen($fa, "w+"); 
$size = filesize($fa); 
$text = fread($file, 2); 
fwrite($file, $match2[2]);

      $fn = "status.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, "0"); 

echo $match1[2];
?>

<script type="text/javascript">
  var distance = 1000;
  localStorage.setItem('recent', distance);
</script>
<?php 
               }   else{ echo "Not connected"; }     
              

?></td>
  <tr>
    <th>Serial number</th>
   <td>  <?php 
   preg_match('#([^<\>]+)Serial_Number=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
   <tr>
    <th>Device Type</th>
   <td>  <?php 
   preg_match('#([^<\>]+)Device_Type=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
  <tr>
    <th>Transmit Power</th>
   <td>  <?php 
   preg_match('#([^<\>]+)Transmit_power=([^<\>]+)#m', $output, $match);

   if($r == 1)
   {

  echo $match2[2];

   }


   ?></td>
   <tr>
    <th>Longitude</th>
  <td>  <?php 
   preg_match('#([^<\>]+)Longitude=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
   <tr>
    <th>Latitude</th>
  <td>  <?php 
   preg_match('#([^<\>]+)Latitude=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
   <tr>
    <th>Region</th>
   <td>  <?php 
   preg_match('#([^<\>]+)Region=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
   <tr>
    <th>Antenna height</th>
  <td>  <?php 
   preg_match('#([^<\>]+)Antenna_Height=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
   <tr>
    <th>Antenna height type</th>
  <td>  <?php 
   preg_match('#([^<\>]+)Antenna_Height_Type=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>
 <tr>
    <th>Base station</th>
  <td>  <?php 
   preg_match('#([^<\>]+)Master=([^<\>]+)#m', $output, $match);
   echo $match[2];
?></td>
  </tr>	    
	    
	    
    </t>
            <?php
    }
    ?>  

</table>

</div>


    <div class="footer" onload="showTableData()">
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
     
<img src="UG.png" width="20" height="20" title="Logo of a company" alt="Logo of a company" class="img1" />
 <p class="a" >University of Ghana - Computer Engineering Department</p>
  
   <img src="Strathclyde.png" width="20" height="20" title="Logo of a company" alt="Logo of a company" class="img2" />
 <p class="c" >National Communications Authority</p>
 <img src="NAC.png" width="50" height="20" title="Logo of a company" alt="Logo of a company" class="img3" />
 <p class="b" >University of Strathclyde</p>
 <?php 
 if($first_line == "Validation failed" || (strpos($output, $word) === false && $first_line=="Validation failed")){

?>
<a name="Back" id="Back" class="button-back" href="index.php" role="button">Back</a>
<?php
}
 elseif($first_line == "Succesful Validation of Client Device" && strpos($output, $word) !== false){
 	 
          
 	?>
 	<a name="Refresh" id="Refresh" class="button-refresh" href="index.php" role="button">Refresh</a>


 <?php
}
 elseif($first_line == "Succesful Validation of Client Device" && strpos($output, $word) === false ){
 	?>
 <form method="post">
      <button type="submit" name="Connect" id="Connect" class="twoToneButton" >Connect</button>
</form>


  <?php 

  
  if(isset($_POST['Connect'])) {?>

    <?php

    include "timer.php";
exit();

        } ?>

 <form method="post">
      <?php 
       $var1 = 'set';


include "timer2.php";
exit();
 ?>
</form>






 	<?php
 }
 else{echo "ERROR"
?>
<a name="Back" id="Back" class="button-back" href="Userlogin.php" role="button">Back</a>

<?php	
}
     session_write_close();
?>


    </div>


</body>

</html>
