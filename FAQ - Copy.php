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
                padding: 10px;
                height: 500px; /* Should be removed. Only for demonstration */
            }

            .left {
                width: 25%;
                height: 500px;
            }

            .right {
                width: 70%;
                height: 90%;
            }
            .right1 {
                width: 71%;
                height: 490px;
                background-color: lightblue;
                padding: 10px;
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
                padding: 15px 25px;
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


            input[type=text], select {
                width: 25%;
                padding: 3px 3px;
                margin: 1px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 1px;
                box-sizing: border-box;
            }

            input[type=password], select {
                width: 25%;
                padding: 3px 3px;
                margin: 1px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 1px;
                box-sizing: border-box;
            }

            input[type=date], select {
                width: 25%;
                padding: 3px 3px;

                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 1px;
                box-sizing: border-box;
            }



            input[type=submit] {
                width: 15%;
                background-color: #bbb;
                color: black;
                padding: 3px 3px;
                margin: 1px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;

                text-align: center;
                text-decoration: none;

            }

            input[type=submit]:hover {
                background-color: #aaa;
            }

            .back{
                border-radius: 3px;
                background-color: #;
                padding: 20px;
            }
            label {
                display: inline-block;
                width:100px;
                text-align: left;
            }

            #slideshow {
                margin: 0px auto;
                position: relative;
                width: 100%;
                height: 100%;
                padding: 0px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            }

            #slideshow > div {
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
            }
            .box
            {
              margin: 5px auto;
              padding: 10px;
              box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
             background-color: #98e698;
             height=100%;
              
                
            }
        </style>
    </head>
    <body>

        <div class="header" >
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
	  	<li style="float:right"><a  href="aboutus.php">About US</a></li>
                <li style="float:right"><a   href="location_search.php">Find a Location</a></li>
                <li style="float:right"><a class="active" href="FAQ.php">FAQ</a></li>

            </ul>';


            }
            else{
            echo '<ul>
		<li><a href="index.php">Home</a></li>
	  	<li><a   href="registration.php">Registration</a></li>
	  	<li><a href="login.php">Login</a></li>
	  	<li style="float:right"><a  href="aboutus.php">About US</a></li>

                <li style="float:right"><a class="active" href="FAQ.php">FAQ</a></li>

            </ul>';

            }
        ?>
        <br>
        <div class ="box" >
            <dl class="blockk">
                

                <dt><h3>Quick Facts About the Blood Donation Process</h3></dt>
                <dd>
                    Blood donation is a simple, four-step process: registration, medical history and mini-physical, donation and refreshments. 
                    It is a safe process, and a sterile needle is used only once for each donor and then discarded.The actual blood donation typically takes less than 10-12 minutes. The entire process, 
                    from the time you arrive to the time you leave, takes about an hour and 15 minutes. The average adult has about 10 pints of blood in his body. Roughly one pint is given during a donation.A healthy donor may donate red blood cells every 56 days, or double red cells every 112 days. There are four types of transfusable products that can be derived from blood: red cells, platelets, plasma and cryoprecipitate. Typically,
                    two or three of these are produced from a pint of donated whole blood — hence each donation can help save more than one life.<br> <br> 
                </dd>

                <dt><h3>Quick Facts About Blood Donors</h3></dt>
                <dd>
                    The Red Cross supplies approximately 40 percent of the nation’s blood supply.
                    The Red Cross provides blood for patients in nearly 3,000 hospitals and transfusion center across the United States.
                    Eighty percent of the blood donations given to the Red Cross are collected at blood drives set up at community organizations, companies, high schools, colleges, places of worship or military installations
                    . The remaining 20 percent are collected at Red Cross blood donation centers.<br> <br> 
                </dd>

                <dt><h3>Why donate blood</h3></dt>
                <dd>
                    You don’t need a special reason to give blood; you just need your own reason. Some of us give blood because we were asked by a friend. Some know that a family member or a friend might need blood some day. Some believe it is the right thing we do.
                    The number one reason donors say they give blood is because they “want to help others.” (I donate because I was one of these people that needed help in the summer of 2004.)
                    Whatever your reason, the need is constant and your contribution is important for a healthy and reliable blood supply. And you’ll feel good knowing you’ve helped change a life.<br> <br> 
                </dd>
            </dl> 


        </div>


    </body>
</html>
