<?php
// Start the session
/*
session_start();
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>BloodBank</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.button {
  display: inline-block;
  padding: 3px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 8px;
  box-shadow: 0 4px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}
img.avatar1 {
    width: 70%;
    hight: 200px;
    
}
.container {
    padding: 16px;
}
</style>
</head>

<body>
            <?php
            /*
        //header("Location:login.php");
        if (isset($_SESSION["id"])) {
           header("Location: profile.php");
          
        }
        */
        ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" >BloodBank</a>
    
</nav>

<div class="container">
    
     <?php
// define variables and set to empty values
$nameErr = $addressErr = $cityErr = $blood_groupErr = $emailErr = $genderErr = $passwordErr = $contactErr = $dateErr = $bdateErr=$professionErr=$layoutErr=$agreeErr ="";
$name = $address = $city = $email = $blood_group = $gender = $password = $contact = $date = $bdate = $profession=$layout=$agree ="";
$diffTime=0.0;
$start=0;
$stop=0;
 $key_density = 0.0;
 $ER = 0.0;
 $TD = 0.0;
 $height =1.0;
 $heightErr=0.0;
  $width =1.0;
 $widthErr=0.0;
  $length =1.0;
 $lengthErr=0.0;
 $totalerror=0;
 $totalkey=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = test_input($_POST["address"]);
    }
    if (empty($_POST["city"])) {
        $cityErr = "City name is required";
    } else {
        $city = test_input($_POST["city"]);
    }
    if (empty($_POST["bdate"])) {
        $bdateErr = "birth date is required";
    } else {
        $bdate = test_input($_POST["bdate"]);
    }
    if (empty($_POST["profession"])) {
        $professionErr = "profession is required";
    } else {
        $profession = test_input($_POST["profession"]);
    }
    if (empty($_POST["blood_group"])) {
        $blood_groupErr = "City name is required";
    } else {
        $blood_group = test_input($_POST["blood_group"]);
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {

            $email = test_input($_POST["email"]);
        }
    }
    if (empty($_POST["contact"])) {
        $contactErr = "contact is required";
    } else {
        $contact = test_input($_POST["contact"]);
    }
    if (empty($_POST["pass"])) {
        $passwordErr = "password is required";
    } else {
        $password = test_input($_POST["pass"]);
    }
    if (empty($_POST["date"])) {
        $dateErr = "date is required";
    } else {
        $date = test_input($_POST["date"]);
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
     if (empty($_POST["layout"])) {
        $layoutErr = "layout is required";
    } else {
        $layout = test_input($_POST["layout"]);
    }
     if (empty($_POST["agree"])) {
        $agreeErr = "agreement is required";
    } else {
        $agree = test_input($_POST["agree"]);
    }
    if (empty($_POST["height"])) {
        $heightErr = "agreement is required";
    } else {
        $height = test_input($_POST["height"]);
    }
    if (empty($_POST["width"])) {
        $widthErr = "agreement is required";
    } else {
        $width = test_input($_POST["width"]);
    }
    if (empty($_POST["length"])) {
        $lengthtErr = "agreement is required";
    } else {
        $length = test_input($_POST["length"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    <p> <span id="demo1"></span></p>
    <p> <span id="demo2"></span></p>
    <p> <span id="demo3"></span></p>
  <h2 style='color:#3e8e41;'>Registration Form</h2>
  <p>Before registration you must know the width, height (squre centimetre) of keyboard your smartphone.</p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                          <div class="imgcontainer">
                              <img src="avatar.png" alt="Avatar" class="avatar">
                          </div>

                          <div class="container">
                              <div class="form-group">
                                    <label for="pwd" style='color:#3e8e41;'>Name:</label>
                                    <input  onclick="getDate1()" onkeydown="uniKeyCode(event)" class="form-control" type="text" name="name" id="name" >
                                    
                               </div>
                              
                              <div class="form-group">
                                    <label for="pwd" style='color:#3e8e41;'>Address:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="address" id="address" >
                                    
                               </div>
                              
                              <div class="form-group">
                                    <label for="pwd" style='color:#3e8e41;'>City:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="city" id="city" >
                                   
                               </div>
                              
                              
                               <div class="form-group">
                                    <label for="email" style='color:#3e8e41;'>Email:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="email" id="email" >
                                   
                               </div>
                              
                              <div class="form-group">
                                    <label for="email" style='color:#3e8e41;' >Phone:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="contact" id="contact" placeholder="your mobile number......">
                                    
                               </div>
                              <div class="form-group">
                                    <label for="email" style='color:#3e8e41;' >height of keyboard of your phone:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="height" id="height" placeholder="area in centimetre......">
                                    
                               </div>
                              <div class="form-group">
                                    <label for="email" style='color:#3e8e41;' >weight of keyboard of your phone:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="width" id="width" placeholder="area in centimetre......">
                                    
                               </div>
                              <div class="form-group">
                                    <label for="email" style='color:#3e8e41;' >length of your thumb:</label>
                                    <input onkeydown="uniKeyCode(event)" class="form-control" type="text" name="length" id="length" placeholder="area in centimetre......">
                                    
                               </div>
                              

                            <button onclick="getDate2()" onclick="geterror()" class="button  button" type="submit" name="Submit" value="Log in" >Submit</button>

                          </div>

                         
                        </form>
  
  
                    <script>
                        function getDate1() {


                            var now = new Date();
                            timeStart = now.getTime();
                            document.cookie = "timeStart = "+timeStart;
                            setcookie("timeStart",timeStart);

                        }
                        function getDate2() {


                            var now = new Date();
                            timeStop = now.getTime();
                            document.cookie = "timeStop = "+timeStop;
                            setcookie("timeStop",timeStop);

                        }
                    </script>
                    <script>
                    	var count=0;
                        var totalkey =0;
                        function uniKeyCode(event) {
                    	
                            var key = event.keyCode;
                            document.getElementById("demo1").innerHTML = "total key "+totalkey; 
                            document.getElementById("demo2").innerHTML = "backspace "+count;
                               
                            document.getElementById("demo3").innerHTML = "The Unicode KEY code is: " + key;
                            if(key==229){
                            	count++;
                            	document.cookie = "error = "+count;
                                setcookie("error",count);
                                
                        	
                           
                            }
                            else{
                                totalkey++;
                                 document.cookie = "total = "+totalkey;
                                setcookie("total",totalkey);
                                
                            }
                            
                               
                               
                            
                        
                        
                    }
                    
                    </script>
                    
                
                    <?php
                        if (isset($_COOKIE['timeStart']) && isset($_COOKIE['timeStop'])) {
                            $start= $_COOKIE['timeStart'];
                            $stop= $_COOKIE['timeStop'];
                           $totalerror = $_COOKIE['error'];
                            $totalkey=$_COOKIE['total'];
                          
                           
                            $diffTime=($stop-$start)/1000;
                            $diffTime = round($diffTime);
                            echo "<h3>Input: </h3>";
                            echo "Name : ".$name;
                            
                            echo "<br>";
                            
                            echo "Height : ".$height;
                            echo "<br>";
                            echo "width : ".$width;
                            echo "<br>";
                            echo "area : ".$height*$width;
                            echo "<br>";
                            echo "thumd : ".$length;
                            echo "<br>";
                            echo "total error :".$totalerror;
                            echo "<br>";
                            echo "total key :".$totalkey;
                            $error_rate=($totalerror/($totalkey+$totalerror))*100;
                            echo "<br>";
                            echo "error rate : :".$error_rate;
                            echo "<br>";
                            echo "Total Time : ".$diffTime;
                            echo "<br>";
                            $density = 39/($height*$width);
                            echo "key density : ".$density;
                            echo "<br>";
                            $ST=$diffTime/($totalkey+$totalerror+$totalerror);
                            echo "Time for each key stock : ".$ST;
                            
                        }
                        else{
                            //echo "not set yet";
                        }
                    
                ?>
  
  
  
  
  
 


</div>

</body>
</html>



