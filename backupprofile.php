<?php
// Start the session
session_start();
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "180";
header("Refresh: $sec; url=$page");
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
                height: 90%;

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
    background-color: #eee;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}
        </style>
    </head>
    <body>

        <div class="header">
            <div class="row">
                <div class="column left" style="background-color:white;height:70px;">
                    <img src="bloodbank_logo.JPG" alt="HTML5 Icon" style="width:50%;height:70px;" position="left">
                </div>
                <div class="column right" style="text-color:#4CAF50;height:70px;float:right;">
                    <h4 style="float:right;color:#4CAF50">Your drops of blood<br>May save a life.</h4>
                </div>
            </div>


        </div>
        <?php
        //header("Location:login.php");
        if (isset($_SESSION["id"])) {
            echo '<ul>
		

		<li><a class="active" href="loginchecker.php">Profile</a></li>
                <li style="float:left"><a  href="messenger.php">messenger</a></li>

                <li style="float:right"><a  href="location_search.php">Find a Location</a></li>

                                
            </ul>';
        } else {
            echo '<ul>
		<li><a href="index.php">Home</a></li>
	  	<li><a  href="registration.php">Registration</a></li>
	  	<li><a class="active" href="login.php">Login</a></li>
	  	<li style="float:right"><a  href="aboutus.php">About US</a></li>
                <li style="float:right"><a   href="location_search.php">Find a Location</a></li>
                <li style="float:right"><a href="FAQ.php">FAQ</a></li>
                                
            </ul>';
        }
        ?>
        <div class="row">
            <div class="column left" >
                <div class="box" class="profile" >
                    <h2 >Profile</h2>
                    <?php
                        require "profiledatamanager.php";
                        $obj = new PROFILEDATAMANAGER;
                        $profile = $obj->getProfile($_SESSION["id"]);
                        $name=$profile['name'];
                        $address=$profile['address'];
                        $blood=$profile["blood"];
                        $last_donation=$profile["last_donation"];
                        echo "<div class='text' style='color:white;' >$name</div>";
                        echo "<div class='text' style='color:white;' >$address</div>";
                        echo "<div class='text' style='color:white;' >$blood</div>";
                        echo "<div class='text' style='color:white;' >$last_donation</div>";
                    
                    ?>
                    <form action="logout.php" method="post">

                        <button class="button buttongreen" type="submit" value="Submit">Logout</button>

                    </form> 
                </div>
                <br><br>
                <div class="box" class="editor">
                    <h2 style="float:center;color:white;">Edit Profile</h2>
                    <form method="post" action="editor.php">  
                        <div style="float:center;color:white;">Options:</div>
                        <select name="option">
                            <option value="name">Name</option>
                            <option value="address">Address</option>
                            <option value="city">City</option>
                            <option value="mail">Mail</option>

                        </select>
                        
                <div style="float:center;color:white;">New Value</div>			  
                        <input type="text" name="optionValue">

                        
                                       <div style="float:center;color:white;"> Last Donation:</div> <input type='date' name='lastDonation'>
                        
                       <div style="float:center;color:white;">  New Password:</div> <input type="password" name="newPassword">
                        <input class="button buttongreen" type="submit" name="Submit" value="SAVE"> 
                    </form>
                </div>	
            </div>

            <div class="column middle" >

                <?php
                $date1 = date_create($profile["last_donation"]);
                $date2 = date_create();

                $diff = date_diff($date1, $date2);
//$diff = $profile["last_donation"]->diff($today);
                $days = $diff->format('%R%a');
//echo $days . " days <br>";
                if ($days > 120) {

                    echo "<br>";

                    $postList = $obj->getSeekerList($_SESSION["id"], $profile["blood"]);
                    //echo $postList[0]["hospital_name"];




                    $count = 0;
                    $to = $profile["email"];
                    //echo $to;
                    while ($count < sizeof($postList) && sizeof($postList[$count]) == 5) {
                        echo '<div class="postback" >';
                        $postid = $postList[$count]["post_id"];
                        $seeker_phone = $postList[$count]["seeker_phone"];
                        $seeker_name = $obj->getSeekerName($seeker_phone);
                        
                                                                        echo "<form action='rejection.php' method='post'>
							<input type='hidden' name='varname' value='$postid'>
						  <button  class='button buttonred' type='submit' value='Submit'>Reject</button>
						 
						</form> ";
                                                                        echo "<form action='messanger_controler.php' method='post'>
							<input type='hidden' name='messagerPhone' value='$seeker_phone'>
							<input type='hidden' name='messagerName' value='$seeker_name'>
							<input type='hidden' name='message' value=''>
						  <button class='button buttonpost' type='submit' value='Submit'>Messege</button>
						 
						</form> ";
                        $hospital=$postList[$count]["hospital_name"];
                        echo "<h4>&nbspHospital: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $hospital </h4>";
                        echo "&nbspName:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $seeker_name". "<br>";
                        
                        
                        

                      //  echo "<br>";
                        echo "&nbspNeeded Blood:&nbsp&nbsp&nbsp".$postList[$count]["needed_blood"] . "<br>";
                        echo "&nbspLast Date:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$postList[$count]["last_date"];

                       echo "<br>";

                        // echo "<form method='post' action='mailsender.php'>  
                        //						<input type='hidden' name='postid' value='$postid'>
                        //						<input type='hidden' name='sendermail' value='$to'>
                        //						<textarea name='message' rows='5' cols='40'></textarea><br>
                        //				<input class = 'button button1' type='submit' name='Submit' value='Send Email'>  
                        //						</form>";
                        //echo "<br>";

                        echo "<br>";
                        echo '</div>';
                        echo "<br><br>";
                        $count++;
                    }
                } else
                    echo "You are not eligeble for donation";
                ?>




            </div>

            <div class="column right1" style="">
                <div class="box" class="menu">
                    <h2 style="float:center;color:white">Request For Blood</h2>
                    
                    <form method="post" action="post.php">  

                        <div style="float:center;color:white">Hospital:</div><?php echo " " ?>
                        <select name="hospitalName">
                            <option value="Dhaka Medical">Dhaka Medical</option>
                            <option value="Squre Hospital">Squre Hospital</option>
                            <option value="Apollo Hospital">Apollo Hospital</option>
                            <option value="Labaid Hospital">Labaid Hospital</option>
                            <option value="Ibn Sina Hospital">Ibn Sina Hospital</option>
                            <option value="Popular Hospital">Popular Hospital</option>
                            <option value="Birdem Hospital">Birdem Hospital</option>
                            <option value="BSMMU">BSMMU</option>
                            <option value="Bangladesh Eye Hospital">Bangladesh Eye Hospital</option>
                            <option value="Basundhura Hospital">Basundhura Hospital</option>
                        </select>
                        <br><br>
                        <div style="float:center;color:white">Blood Group:</div><?php echo " " ?>
                        <select name="bloodGroup">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <br><br>
                        <div style="float:center;color:white">Last Date:</div> <input type='date' name='lastDate'>
                        <br><br>
                        <input class="button buttongreen" type="submit" name="post"  value="POST"> 
                    </form>

                </div>
            </div>
        </div>

    </body>
</html>

