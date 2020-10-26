



            
<script type="text/javascript">$(function(){
    

    
});</script>

                 <?php
                 $old_path=getcwd();
                 chdir('CS');
                  $output2=shell_exec("sh Avail_Spect_Slave.sh");
                  chdir($old_path); 
                  preg_match('#([^<\>]+)Channel=([^<\>]+)#m', $output2, $match1);

                  ?>
<script>

        var customerId = $().find("td").eq(1).html();   
                        var content = "<?php if($match1[2]!="0"){echo $match1[2]; } else {echo "Not connected";}?>";
var x=document.getElementById('table').rows[parseInt(0,10)].cells;
x[parseInt(1,10)].innerHTML=content; 

  </script>