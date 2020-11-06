<div class="timer">
 

 <p id="demo"></p> 
 <?php   $old_path=getcwd();
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
                    
   echo $time[2]; ?>;


<?php  $t = "time.php"; 
$file = fopen($t, "w+"); 
$size = filesize($t); 
$text = fread($file, 2);
 

fwrite($file, $time[2] ); ?>
  
    <?php  $fn = "variables.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, $match1[2]); 

     $fa = "variables2.php"; 
$file = fopen($fa, "w+"); 
$size = filesize($fa); 
$text = fread($file, 2); 
fwrite($file, $match2[2]); 



$tt = file_get_contents($t);




$re = file_get_contents($fn);
$f = "Spec_Req.php"; 



$bt = file_get_contents($f);


 ?>

 



 
 </div><script>
// Set the sec we're counting down to

  
var stopTime = "<?php echo $time[2];?>"

var countDownDate = new Date(stopTime).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  if (distance > 0){
  // Time calculations for days, hours, minutes and seconds
  localStorage.setItem('r', 1);
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s " ;
    localStorage.setItem('recent', distance);
       var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Req.php",  //your page
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        }); 




}else{
   clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED" /*+ Dis*/;
  document.getElementById('disconnect').style.visibility = 'hidden';
   localStorage.setItem('r', 0);
     var customerId = $().find("td").eq(1).html();   
                        var content = "<?php 
echo "Not connected"; ?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content;

   var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Req.php",  //your page
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        });
  
    
}
}, 1000);

var y = setInterval(function() {
var now = new Date().getTime();
var distance = countDownDate - now;
  if (distance > 0){
 var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Use.php",  //your page
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        }); 
  }
    else{
 var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Use.php",  //your pages
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        }); 

    }


}, 62000);

</script>


        <script type="text/javascript">
          
              var twoToneButton = document.querySelector('.twoToneButton');
    
    twoToneButton.addEventListener("click", function() {
        twoToneButton.innerHTML = "Connecting";
        twoToneButton.classList.add('spinning');
        
      setTimeout( 
            function  (){  
                twoToneButton.classList.remove('spinning');
                twoToneButton.innerHTML = "connect";
                
            }, 1100);
    }, false);
        </script>

              
<script type="text/javascript">
    var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Req.php",  //your page
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        }); 
</script>
<?php

$fa = "variables2.php";
$r = file_get_contents($fa);
 $row = <<<EOT
$re
EOT;
 $vf = "0";

   $array_send = <<<EOT
  
<script> document.write(row);</script>
EOT;

    if( $row !=  $vf )
    {?>

  <script>
        var a = "<?php echo $re;?>";
        if(a != 0){
        var customerId = $().find("td").eq(1).html();   
                        var content = "<?php if($match1[2]!="0" ){echo $match1[2]; } else {echo "Not connected";}?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content; 

       var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo $match2[2]; ?>";
var x=document.getElementById('table').rows[parseInt(3,10)].cells;
x[parseInt(1,10)].innerHTML=content; 


}
else{
    var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo "Not connected";?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content;

      var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo "-----" ;?>";
var x=document.getElementById('table').rows[parseInt(3,10)].cells;
x[parseInt(1,10)].innerHTML=content; 




}


  </script>
    <?php
  }
    if( $row !=  $vf )
    {

      ?>

  <div class="footer" onload="showTableData()">
       <form method="post">
   <button name="disconnect" id="disconnect" class="button-disconnect" href="Userlogin.php" role="button">Disconnect</button>
</form>


<?php
  if(isset($_POST['disconnect']))
{?>


  <script type="text/javascript">
       var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo "------" ;?>";
var x=document.getElementById('table').rows[parseInt(3,10)].cells;
x[parseInt(1,10)].innerHTML=content; 
  </script><?php

$old_path=getcwd();
              chdir('CS');
                 $output3=shell_exec("sh Spec_Logout.sh");
                  chdir($old_path); 


    $fn = "variables.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, "0");

    $f = "time.php"; 
$file = fopen($f, "w+"); 
$size = filesize($f); 
$text = fread($file, 2); 
fwrite($file, "0");

   $fn = "variables2.php"; 
$file = fopen($fn, "w+"); 
$size = filesize($fn); 
$text = fread($file, 2); 
fwrite($file, "0");

 
 
?>  </div><div class="footer" onload="showTableData()">
<form method="post">
      <button type="submit" name="Connect" id="Connect" class="twoToneButton" >Connect</button>
</form>
<?php  
   
 include 'timer2.php';
exit(); 
} ?>
</div>

       <?php 
    }else {exit();}
  ?>
