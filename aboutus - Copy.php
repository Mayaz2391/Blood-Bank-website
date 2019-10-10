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
                height: 400px;

            }

            .left {
                width: 20%;
                height: 550px;

                margin: 0;
                padding: 0;
                position: fixed;
                overflow: hidden;

                position: -webkit-sticky; /* Safari */
                position: sticky;
                top: 50px;

            }
            .right1 {
                width: 20%;
                height: 550px;

                margin: 0;
                padding: 0;
                position: fixed;
                overflow: hidden;

                position: -webkit-sticky; /* Safari */
                position: sticky;
                top: 50px;

            }

            .right {
                width: 70%;
                height: 100%


            }

            .middle{
                width: 59%;
                height: 100%;
                padding-left: 10px;

                overflow-y: auto;

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
            

            .buttonred {
                display: inline-block;
                padding: 5px 5px;
                font-size: 20px;
                cursor: pointer;
                text-align: center;
                background-color: #990000;
                text-decoration: none;
                outline: none;
                color: #fff;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
                float: right;
                

            }
                        .buttongreen {
                display: inline-block;
                padding: 5px 5px;
                font-size: 20px;
                cursor: pointer;
                text-align: center;
                background-color: #003300;
                text-decoration: none;
                outline: none;
                color: #fff;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
                float: right;
                

            }
            .buttonred:hover {background-color: #cc0000}

            .buttonred:active {
                background-color: #cc0000;
                box-shadow: 0 2px #666;
                transform: translateY(4px);
            }
            
                                    .buttonpost {
                display: inline-block;
                padding: 5px 5px;
                font-size: 20px;
                cursor: pointer;
                text-align: center;
                background-color: #4CAF50;
                text-decoration: none;
                outline: none;
                color: #fff;
                border: none;
                border-radius: 15px;
                box-shadow: 0 5px #999;
                float: right;
                

            }
            .buttonpost:hover {background-color: #003300}

            .buttonpost:active {
                background-color: #003300;
                box-shadow: 0 2px #666;
                transform: translateY(4px);
            }
            


            .buttongreen:hover {background-color: green}

            .buttongreen:active {
                background-color: green;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }
            div.profile {
                width: 100%;
                background-color: #4CAF50;
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
            .addheader{


                margin: 0;
                padding: 0;
                overflow: hidden;

                position: -webkit-sticky; /* Safari */
                position: sticky;

            }
            .box
            {
                margin: 5px auto;
                padding: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                background-color: #4CAF50;


            }
            .boxl
            {
                margin: 5px auto;
                padding: 15px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
                background-color: #ccc;


            }
            #menu {
                position: fixed;
                right: 0;
                top: 0%;
                width: 0em;
                margin-top: -2.5em;
            }
 h2 {
    color: white;
}
.text {
    text-color: green;
}
.postback {
    background-color: #ddd;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}
        </style>
    </head>
    <body>
	
	<div class="header">
		<div class="row">
	  	<div class="column left" style="background-color:;height:70px;">
	    		<img src="bloodbank_logo.JPG" alt="HTML5 Icon" style="width:50%;height:70px;" position="left">
	  	</div>
	  	<div class="column right" style="text-color:#4CAF50;height:70px;float:right;">
	    		<h4 style="float:right;color:#4CAF50">Your drops of blood<br>May save a life.</h4>
	  	</div>
		</div>
		
		
	</div>

        <?php
	//header("Location:login.php");
            if(isset($_SESSION["id"])){
                echo '<ul>
		<li><a href="index.php">Home</a></li>

		<li><a  href="loginchecker.php">Profile</a></li>
	  	<li style="float:right"><a class="active"   href="aboutus.php">About US</a></li>
                <li style="float:right"><a  href="location_search.php">Find a Location</a></li>
                <li style="float:right"><a href="FAQ.php">FAQ</a></li>
                                
            </ul>';


            }
            else{
            echo '<ul>
		<li><a href="index.php">Home</a></li>
	  	<li><a  href="registration.php">Registration</a></li>
	  	<li><a href="login.php">Login</a></li>
	  	<li style="float:right"><a class="active" href="aboutus.php">About US</a></li>

                <li style="float:right"><a href="FAQ.php">FAQ</a></li>
                                
            </ul>';

            }
        ?>

        <div style="background-color: #98e698;">
            <div class ="box" class="center" class="row" style="width:80%;height:200px;background-color:#aaa;>

                 <div class="column" >
                 <p> <h3>A note from Developers</h3>
                We are currently students of Department of Computer Science and Engineering, University of Dhaka. 
                For our web engineering course we were thinking about a good idea for our website.

                Picking up Blood Bank as our website project was a easy decision.
                Blood donation is good for not only the patients but also the donor.
                For further information on questions like why,when,how someone should donate blood please check our FAQ section of the website.<br><br>


                Your honest opinion of our website can make this project even better.
                Kindly mail us if you have any suggestion for developing any part of our website.
                Since this is a charitable project your donation would be helpful for the future development.Email us if you want to donate.<br><br>



                </p>

            </div>
        
        <br>

          
        <div  class="row" >
                <div class ="box" class="center" class="column" style="width:40%;height:130px;background-color:#aaa;>

                <img  src="faruk.jpg" alt="image of developer" style="width:120px;height:120px;" >
                <p> Md Faruk Rahman <br>
                    Department of Computer Science and Engineering<br>
                    University of Dhaka<br>
                    <a href="mailto:fhossain615@gmail.com">fhossain615@gmail.com</a>


                </p>
            </div> 
            <br>
            
        <div class ="box" class="center" class="column" style="width:40%;height:130px;background-color:#aaa;>

                <img  src="mayaz.jpg" alt="image of developer" style="width:30%;height:120px;" >
                <p> Md Mizanur Rahman <br>
                    Department of Computer Science and Engineering<br>
                    University of Dhaka<br>
                    <a href="mailto:mizan.mayaz@gmail.com">mizan.mayaz@gmail.com</a>


                </p>
            </div>
            
            	  	<div class ="box" class="center" class="column" style="width:40%;height:130px;background-color:#aaa;>
			
			<h2 style="float:center;">Admin Data Manager</h2>
			  <?php
			  $currentDateTime = date('Y-m-d');
			  echo $currentDateTime;
			  
			echo "<form  method='post' action='test.php'>  
				  
					  Admin Code:<br>
					  <input type='hidden' name='date' value='$currentDateTime'>
					  <input type='password' name='code'>
					  <br><br>
					  <input class='button buttongreen' type='submit' name='Submit' value='Clean '> 
				</form>"
			?>
	  	</div>

        </div>
          



    </div>




</body>
</html>

