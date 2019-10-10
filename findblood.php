<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
          <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="profile.php">Back</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="active"><a href="findblood.php">Find blood</a></li>
          <li ><a href="newmessenger.php">Messanger</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="viewprofile.php"><span class="glyphicon glyphicon-user"></span>View profile</a></li>
          <li><a href="editprofile.php"><span class="glyphicon glyphicon-user"></span>Edit profile</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
        <?php
        //header("Location:login.php");
        
        ?>
        
        <?php
				// define variables and set to empty values
					$hospitalNameErr = $bloodGroupErr= $lastDateErr="";
					$hospitalName = $bloodGroup= $lastDate="";

					if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  	if (empty($_POST["hospitalName"])) {
						    $hospitalNameErr ="hospitalName is required";
						  } else {
						    $hospitalName = test_input($_POST["hospitalName"]);
						  }
						  if (empty($_POST["bloodGroup"])) {
						    $bloodGroupErr = "bloodGroup is required";
						  } else {
						    $bloodGroup = test_input($_POST["bloodGroup"]);
						  }
						  if (empty($_POST["lastDate"])) {
						    $lastDateErr = "lastDate name is required";
						  } else {
						    $lastDate = test_input($_POST["lastDate"]);
						  }
						  
					  
					}

					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}

			?>

       <div class="box" class="menu">
                    <h2 style="float:center;color:white">Request For Blood</h2>
                    
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">  

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
                <?php
			
				if (!empty($hospitalName) && !empty($bloodGroup)  && !empty($lastDate) ){
					require "profiledatamanager.php";
					$obj = new PROFILEDATAMANAGER;
					$obj->post($_SESSION["id"],$hospitalName,$bloodGroup,$lastDate);
					
				}
			
		
				
			?>

    </body>
</html>

