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
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}
        </style>
    </head>
    <body>

        
        <?php
        //header("Location:login.php");
      
        ?>
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
          <li ><a href="findblood.php">Find blood</a></li>
        <li ><a href="newmessenger.php">Messanger</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="viewprofile.php"><span class="glyphicon glyphicon-user"></span>View profile</a></li>
        <li><a href="editprofile.php"><span class="glyphicon glyphicon-user"></span>Edit profile</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
                    <h2 >Profile</h2>
                    <?php
                        require "profiledatamanager.php";
                        $obj = new PROFILEDATAMANAGER;
                        $profile = $obj->getProfile($_SESSION["id"]);
                        $name=$profile['name'];
                        $address=$profile['address'];
                        $blood=$profile["blood"];
                        $last_donation=$profile["last_donation"];
                       
                       // echo $name;
                        //echo $address;
                       // echo $blood;
                       // echo $last_donation;
                    
                    ?>
                   

                <form method="post" >
                          <div class="imgcontainer">
                              <img src="avatar.png" alt="Avatar" class="avatar">
                          </div>

                          <div class="container">
                            <label align = "center" for="uname"><b>Name: <?php echo $name ?></b></label>

                          </div>
                          <div class="container">
                            <label align = "center" for="uname"><b>Address: <?php echo $address ?></b></label>

                          </div>
                          <div class="container">
                            <label align = "center" for="uname"><b>Blood Group: <?php echo $blood ?></b></label>

                          </div>
                          <div class="container">
                            <label align = "center" for="uname"><b>Last Donation: <?php echo $last_donation ?></b></label>

                          </div>
                   
    </body>
</html>

