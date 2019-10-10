<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	body {
    		font-size: 28px;
		
	}
	<style>
	* {
    		box-sizing: border-box;
	}

	/* Create two unequal columns that floats next to each other */
	.column {
	    float: left;
	    padding: 10px;*
	    
	}

	.left {
	        width: 20%;
		height: 500px;
	}

	.right {
	  width: 70%;
		height: 100%
		
	}
	.right1 {
	  width: 300px;
		height: 350px;
		background-color: lightblue;
	}
	.middle{
		width: 600px;
		height: 400px;
	}

	/* Clear floats after the columns */
	.row:after {
	    content: "";
	    display: table;
	    clear: both;
	}
	ul {
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
	    position: -webkit-sticky; /* Safari */
	    position: sticky;
	    top: 0;
	}

	li {
	    float: left;
	}

	li a {
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}

	li a:hover {
	    background-color: #111;
	}

	.active {
	    background-color: #4CAF50;
	}
.button {
  display: inline-block;
  padding: 5px 5px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
div.profile {
    width: 100%;
    background-color: lightblue;
}

div.editor {
    width: 100%;
    padding: 0px;
    background-color: lightblue;
}
div.post {
    width: 100%;
    padding: 10px;
    background-color: lightblue;
}
</style>
</head>
<body>
	
	<div class="header">
		<div class="row">
	  	<div class="column left" style="background-color:white;height:70px;">
	    		<img src="bloodbank_logo.JPG" alt="HTML5 Icon" style="width:50%;height:70px;" position="left">
	  	</div>
	  	<div class="column right" style="text-color:#4CAF50;height:70px;">
	    		<h4 style="float:right;color:#4CAF50">Your drops of blood<br>May save a life.</h4>
	  	</div>
		</div>
		
		
        <?php
	//header("Location:login.php");
            if(isset($_SESSION["id"])){
                echo '<ul>
		<li><a href="index.php">Home</a></li>
	  	<li><a  href="registration.php">Registration</a></li>
		<li><a  href="loginchecker.php">Profile</a></li>
	  	<li style="float:right"><a  href="aboutus.php">About US</a></li>
                <li style="float:right"><a  href="location_search.php">Find a Location</a></li>
                <li style="float:right"><a href="FAQ.php">FAQ</a></li>
                <li style="float:right"><a class="active" href="about.php">About</a></li>
            </ul>';


            }
            else{
            echo '<ul>
		<li><a href="index.php">Home</a></li>
	  	<li><a  href="registration.php">Registration</a></li>
	  	<li><a href="login.php">Login</a></li>
	  	<li style="float:right"><a  href="aboutus.php">About US</a></li>
                <li style="float:right"><a  href="location_search.php">Find a Location</a></li>
                <li style="float:right"><a href="FAQ.php">FAQ</a></li>
                <li style="float:right"><a  class="active" href="about.php">About</a></li>
            </ul>';

            }
        ?>
	<div class="row">
	  	<div class="column left">
			<img src="page_logo.jpg" alt="HTML5 Icon" style="width:100%;height:450px;" position="left">
	  	</div>

		<div class="column middle" style="background-color:white;">
			
			
			
	  	</div>

	  	<div class="column right1" style="">
			
			<h2 style="float:center;color:#4CAF50">Admin Data Manager</h2>
			  <?php
			  $currentDateTime = date('Y-m-d');
			  echo $currentDateTime;
			  
			echo "<form  method='post' action='test.php'>  
				  
					  Admin Code:<br>
					  <input type='hidden' name='date' value='$currentDateTime'>
					  <input type='password' name='code'>
					  <br><br>
					  <input class='button button1' type='submit' name='Submit' value='Clean DataBase'> 
				</form>"
			?>
	  	</div>
	</div>

</body>
</html>

