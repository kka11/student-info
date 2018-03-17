<!--<link rel="stylesheet" href="final.css" type="text/css">-->
<?php
	session_start();
?>
<!DOCTYPE html>
<title>Intern Project</title>
<html>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<style>
div.transbox{
  width:500px;
  align:center;
  height:400px;
  margin:0 auto;
  padding:1%;
  background-color: white;
  text-size:20px;
  text-color:#4db6ac;
}
</style>
<body >
<div class="row" style="background:#2B8C67;">
			<br>
			<p align="center" style="font-size:25px;width:30%;margin:0 auto; display:block;height:80px;color:white;">Indian Institute of Technology Jodhpur</p>
</div>
<div class="row">
	<h5 style="width:100%;text-align:center;margin-top:4%;">Intern Project</h5><br><br>
    <div class="col l4 s12 m4"></div>
	<div class="transbox col l4 s12 m4">
		<form style="width:100%; height:100%;" action="insert.php" method="POST">
		        <div class="row">
		            <div class="input-field col s6" style="width:100%;margin:0 auto;display: block;">
                      <input id="name" type="text" class="validate" name="name" required>
                      <label for="name" style="color:#009688">Name : </label>
                    </div>
                    <div class="input-field col s6" style="width:100%;">
                      <input id="email" type="email" class="validate" name="email" required>
                      <label for="E-mail" style="color:#009688">Email : </label>
                    </div>
                </div>
                <br>
            	<h6 style="color:black;width:100%;text-align:center;display: block;">
		            <?php 
		            	if(isset($_SESSION['message'])){
		            		echo $_SESSION['message'];
		            		session_unset();
		            		session_destroy();
		            	}
					?>
	            </h6>
	        <button style="width:30%;margin:0 auto; display:block;text-align:center;" class="btn waves-effect waves-light" type="submit" name="submitButton">Submit
                <i class="material-icons right">send</i>
            </button> 
		    </form>	    
	  </div>
</div>	
<script>
$(document).ready(function() {
    $('select').material_select();
});
</script>
</body>
</html>
