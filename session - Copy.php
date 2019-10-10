<?php
				// define variables and set to empty values
				//$passwordErr =$contactErr= "";
				$password =$contact=$contactErr=$passwordErr= "";
                                $X ="false";
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
 				  if (empty($_POST["contact"])) {
				    $contactErr = "contact is required";
				  } else {
				    $contact = test_input($_POST["contact"]);
				  }
				  if (empty($_POST["password"])) {
				    $passwordErr = "password is required";
				  } else {
				    $password = test_input($_POST["password"]);
				  }
			         
				}
				
				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}

?>
<?php
			               
				if (!empty($contact) && !empty($password)){
					
				
					require "profiledatamanager.php";
					$obj = new PROFILEDATAMANAGER;
					$X = $obj->authentication($contact, $password);
                   // echo $X;

					if($X ==="true")
					{
						
						
						session_start();
				
						$_SESSION["id"] = $contact;
						
						header("Location: profile.php");
					}
					else{
						header("Location: index.php");
					}
					
				}
				else{
						header("Location: index.php");
			    }
                      
                              

?>
