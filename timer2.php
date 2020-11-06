<div class="timer">

 <p id="demo"></p>


  <?php  $f = "time.php"; 
$r = file_get_contents($f);




 ?>

 
 </div>
 <script src = "http://code.jquery.com/jquery-1.9.1.js"></script><script>

 
// Set the sec we're counting down to
  
var Stoptime = "<?php echo "$r";  ?>";


var countDownDate = new Date(Stoptime).getTime();


// Update the count down every 1 second
var x = setInterval(function() {


 // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
   distance = countDownDate - now;

  localStorage.setItem('r', 1);


  if (distance > 0){
  localStorage.setItem('r', 1);
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
      var status = localStorage.getItem('r');
    $.ajax({
            type : "POST",  //type of method
            url  : "Req.php",  //your page
            data :{data:status},
            success: function(html){  
                               //do what you want here...
                    }
        });



}else
 // If the count down is finished, write some text
   {
    clearInterval(x);
     localStorage.setItem('r', 0);
    document.getElementById("demo").innerHTML = "EXPIRED" ;
     document.getElementById('disconnect').style.visibility = 'hidden';
  document.getElementById('disconnect').setAttribute("style","visibility:hidden");
  document.getElementById("disconnect").disabled = true;
localStorage.setItem('recent', 0);
                      
        var customerId = $().find("td").eq(1).html();   

                       var content = "<?php echo "Not connected"; ?>";
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

 $fn = "variables.php"; 


$re = file_get_contents($fn);

$fa = "variables2.php";
$r = file_get_contents($fa);


$f = "Spec_Req.php"; 


$btn = file_get_contents($f);


 $row = <<<EOT
$re
EOT;
 $vf = "0";

   $array_send = <<<EOT
  
<script> document.write(row);</script>
EOT;
 if( $row !=  $vf )
    {?>


<script type="text/javascript">
 
 if(localStorage.getItem('recent') > 900   )
   {  
       
        var customerId = $().find("td").eq(1).html();   
                       var content = "<?php if ($re != 0){echo $re;}else {echo "Not connected";} ?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content;
     var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo "$r"; ?>";
var x=document.getElementById('table').rows[parseInt(3,10)].cells;
x[parseInt(1,10)].innerHTML=content; 

}
else{ 

        var customerId = $().find("td").eq(1).html();   

                       var content = "<?php echo "Not connected"; ?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content;
  
      var customerId = $().find("td").eq(1).html();   
                        var content = "<?php echo "------" ;?>";
var x=document.getElementById('table').rows[parseInt(3,10)].cells;
x[parseInt(1,10)].innerHTML=content; 




}
  </script>
  <?php
   } if( $row !=  $vf && $btn == 1)
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
    }else {exit();}?>
