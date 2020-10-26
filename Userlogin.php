<?php 
 session_start();
    session_destroy();
 
?>
<html>
<head>
	<title> Client Login</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="login-box">
		    <div class="row">
		    	<div class="col-md-6 login-left">
		    		<div class="coverup">
		    		<h2 class="header"style="color: white"> Client Login </h2>
		    		<form action="validation.php" method="post" id="form-data">
		    			<div class="page">
		    			<div class="form-group">
		    				<div class="label" style="color: white">Username</div>
		    				<input type="text" name="user" placeholder="Username" class="form-control" required>
		    			</div>
		    			<div class="form-group">
		    				<div class="label" style="color: white">Password</div>
		    				<input type="password" name="password" placeholder="Password" class="form-control" required>
		    			</div>
		    			<div class="form-group">
		    				<button id="login" class="login">
	 						<a  class="login" id="login" style="color: white">Login</a></button>
		    			</div> </form>
                                           </div>
		    	               </div>
		    	    </div>		    	
		    </div>
          </div>
		</div>
		<script type="text/javascript">
	$(document).ready(function(){
	$.ajax({
		url:'validation.php',
		method:'post',
		data:$("#form-data").serialize(),success:function(response){
$("#form-data")[0].reset();
		}
	});

	  $.ajax({
            //type of method
            url  : "Req.php", 
             type : "POST",  //your page
            data :{name:'rrrr'}.serialize(),
            success: function(html){  
                          $('#msg').html(html) ;      //do what you want here...
                    }
        }); 
}
</script>

	</body>
</html>