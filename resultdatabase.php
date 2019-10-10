<?php
class RESULTDATAMANAGER{
        

	public function getEntropy()
        {
            $servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person  ";
		$result = $conn->query($sql);
                //return $result;
                $computer = 0;
                $layout1=0;
                $layout2=0;
                $layout3=0;
                $layout4=0;
                $computerCount = 0;
                $layout1Count=0;
                $layout2Count=0;
                $layout3Count=0;
                $layout4Count=0;
                $phone = 0;
                $phoneCount =0;
                $total =0;
                //////////////////
                $symbol =0;
                $letter =0;
                $number =0;
                
                $com_letter=0;
                $com_symbol =0;
                $com_number =0;
                
                $one_letter=0;
                $one_symbol =0;
                $one_number =0;
                $two_letter=0;
                $two_symbol =0;
                $two_number =0;
                $three_letter=0;
                $three_symbol =0;
                $three_number =0;
                $four_letter=0;
                $four_symbol =0;
                $four_number =0;
                
                $tem = 0;
		if ($result->num_rows > 0) {
		    
		    while($row = $result->fetch_assoc()) {
                        ////////////////////
                        $pre_letter=$letter;
                        $pre_symbol =$symbol;
                        $pre_number =$number;
                        
                        
                        /////////////////
                        $total++;
                        $entropy = 0;
                        $password = $row["password"];
                        for($i=0; $i<strlen($password); $i++)
                        {
                            if(ord($password[$i])>=65 && ord($password[$i])<=90)
                            {
                                $entropy = $entropy + 4;
                                $letter++;
                            }
                            else if(ord($password[$i])>=97 && ord($password[$i])<=122)
                            {
                                $entropy = $entropy + 4;
                                $letter++;
                            }
                            else if(ord($password[$i])>=48 && ord($password[$i])<=57)
                            {
                                $entropy = $entropy + 3.5;
                                $number++;
                            }
                            else
                            {
                                $entropy = $entropy + 7;
                                $symbol++;
                            }
                        }
                        $entropy =$entropy*strlen($password);
			if($row["layout"]==="computer"){
                                
				$computer = $computer+$entropy;
                                $computerCount++;
                                //////////////
                                $tem = $symbol -$pre_symbol;
                                $com_symbol = $com_symbol+$tem;
                                
                                $tem = $letter-$pre_letter;
                                $com_letter = $com_letter+$tem;
                                
                                $tem= $number - $pre_number;
                                $com_number = $com_number+$tem;
                                
                                //////////////
                                
                                
                                
			}
                        else if($row["layout"]==="layout1")
                        {
                            $layout1 = $layout1+$entropy;
                            $layout1Count++;
                            $phone = $phone+$entropy;
                            $phoneCount++;
                            //////////////
                                $tem = $symbol -$pre_symbol;
                                $one_symbol = $one_symbol+$tem;
                                
                                $tem = $letter-$pre_letter;
                                $one_letter = $one_letter+$tem;
                                
                                $tem= $number - $pre_number;
                                $one_number = $one_number+$tem;
                        }
                        else if($row["layout"]==="layout2")
                        {
                            $layout2 = $layout2+$entropy;
                            $layout2Count++;
                            $phone = $phone+$entropy;
                            $phoneCount++;
                            //////////////
                                $tem = $symbol -$pre_symbol;
                                $two_symbol = $two_symbol+$tem;
                                
                                $tem = $letter-$pre_letter;
                                $two_letter = $two_letter+$tem;
                                
                                $tem= $number - $pre_number;
                                $two_number = $two_number+$tem;
                        }
                        else if($row["layout"]==="layout3")
                        {
                            $layout3 = $layout3+$entropy;
                            $layout3Count++;
                            $phone = $phone+$entropy;
                            $phoneCount++;
                            //////////////
                                $tem = $symbol -$pre_symbol;
                                $three_symbol = $three_symbol+$tem;
                                
                                $tem = $letter-$pre_letter;
                                $three_letter = $three_letter+$tem;
                                
                                $tem= $number - $pre_number;
                                $three_number = $three_number+$tem;
                        }
                        else if($row["layout"]==="layout4")
                        {
                            $layout4 = $layout4+$entropy;
                            $layout4Count++;
                            $phone = $phone+$entropy;
                            $phoneCount++;
                            //////////////
                                $tem = $symbol -$pre_symbol;
                                $four_symbol = $four_symbol+$tem;
                                
                                $tem = $letter-$pre_letter;
                                $four_letter = $four_letter+$tem;
                                
                                $tem= $number - $pre_number;
                                $four_number = $four_number+$tem;
                        }
				
		    }
                    
                    
		} else {
		    
		}
                if($computerCount > 0)
                {
                    $avgEntropyComputer = $computer/$computerCount;
                }
                else
                    $avgEntropyComputer=0;
                
                if($layout1Count>0)
                {
                     $avfEntropyLayout1= $layout1/$layout1Count;
                }
                else
                    $avfEntropyLayout1=0;
                
                if($layout2Count>0)
                {
                     $avfEntropyLayout2= $layout2/$layout2Count;
                }
                else
                    $avfEntropyLayout2=0;
                
                if($layout3Count>0)
                {
                     $avfEntropyLayout3= $layout3/$layout3Count;
                }
                else
                    $avfEntropyLayout3=0;
                
                if($layout4Count>0)
                {
                     $avfEntropyLayout4= $layout4/$layout4Count;
                }
                else
                    $avfEntropyLayout4=0;
                
                $entropyFinal["computer"] = $avgEntropyComputer;
                $entropyFinal["layout1"] = $avfEntropyLayout1;
                $entropyFinal["layout2"] = $avfEntropyLayout2;
                $entropyFinal["layout3"] = $avfEntropyLayout3;
                $entropyFinal["layout4"] = $avfEntropyLayout4;
                if($phoneCount>0)
                    $entropyFinal["phone"] = $phone/$phoneCount;
                else
                    $entropyFinal["phone"]=0;
                $entropyFinal["total"] = $total;
                /////////////////////////////////finding charecter persentage
               
                
                
                $total_com = $com_letter+$com_number+$com_symbol;
                $total_one = $one_letter+$one_number+$one_symbol;
                $total_two = $two_letter+$two_number+$two_symbol;
                $total_three =$three_letter+$three_number+$three_symbol;
                $total_four =$four_letter+$four_number+$four_symbol;
                
                $total_char = $total_one+$total_two+$total_three+$total_four;
                
                $entropyFinal["computer_letter"] =($com_letter/$total_com)*100;
                $entropyFinal["layout1_letter"] = ($one_letter/$total_one)*100;
                $entropyFinal["layout2_letter"] = ($two_letter/$total_two)*100;
                $entropyFinal["layout3_letter"] = ($three_letter/$total_three)*100;
                $entropyFinal["layout4_letter"] = ($four_letter/$total_four)*100;
                
                $entropyFinal["computer_symbol"] = ($com_symbol/$total_com)*100;
                $entropyFinal["layout1_symbol"] = ($one_symbol/$total_one)*100;
                $entropyFinal["layout2_symbol"] = ($two_symbol/$total_two)*100;
                $entropyFinal["layout3_symbol"] = ($three_symbol/$total_three)*100;
                $entropyFinal["layout4_symbol"] = ($four_symbol/$total_four)*100;
                
                $entropyFinal["computer_number"] = ($com_number/$total_com)*100;
                $entropyFinal["layout1_number"] =($one_number/$total_one)*100;
                $entropyFinal["layout2_number"] = ($two_number/$total_two)*100;
                $entropyFinal["layout3_number"] =($three_number/$total_three)*100;
                $entropyFinal["layout4_number"] = ($four_number/$total_four)*100;
               
                $entropyFinal["letter_avg_phone"] = (($one_letter+$two_letter+$three_letter+$four_letter)/($total_char))*100;
                $entropyFinal["number_avg_phone"] = (($one_number+$two_number+$three_number+$four_number)/($total_char))*100;
                $entropyFinal["symbol_avg_phone"] = (($one_symbol+$two_symbol+$three_symbol+$four_symbol)/($total_char))*100;
                return $entropyFinal;
		$conn->close();
        }
        public function getPercentOfPasswordWothoutSymbol()
        {
            $servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person  ";
		$result = $conn->query($sql);
                //return $result;
                
               
                
                $start_number_com=0;
                $start_number_one=0;
                $start_number_two=0;
                $start_number_three=0;
                $start_number_four=0;
                
                $start_letter_com=0;
                $start_letter_one=0;
                $start_letter_two=0;
                $start_letter_three=0;
                $start_letter_four=0;
                
                $start_symbol_com=0;
                $start_symbol_one=0;
                $start_symbol_two=0;
                $start_symbol_three=0;
                $start_symbol_four=0;
                
                $end_number_com=0;
                $end_number_one=0;
                $end_number_two=0;
                $end_number_three=0;
                $end_number_four=0;
                
                $end_letter_com=0;
                $end_letter_one=0;
                $end_letter_two=0;
                $end_letter_three=0;
                $end_letter_four=0;
                
                $end_symbol_com=0;
                $end_symbol_one=0;
                $end_symbol_two=0;
                $end_symbol_three=0;
                $end_symbol_four=0;
                
                $number_one=0;
                $number_two=0;
                $number_three=0;
                $number_four=0;
                $number_com=0;
		if ($result->num_rows > 0) {
		    
		    while($row = $result->fetch_assoc()) {
                        if($row["layout"]==="computer")
                        {
                            $number_com++;
                        }
                        else if($row["layout"]==="layout1")
                        {
                            $number_one++;
                        }
                        else if($row["layout"]==="layout2")
                        {
                            $number_two++;
                        }
                        else if($row["layout"]==="layout3")
                        {
                            $number_three++;
                        }
                        else if($row["layout"]==="layout2")
                        {
                            $number_four++;
                        }
                        $password = $row["password"];
                        $len =  strlen($password)-1;
                            if(ord($password[0])>=65 && ord($password[0])<=90)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $start_letter_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $start_letter_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $start_letter_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $start_letter_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $start_letter_four++;
                                }
                            }
                            else if(ord($password[0])>=97 && ord($password[0])<=122)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $start_letter_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $start_letter_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $start_letter_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $start_letter_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $start_letter_four++;
                                }
                            }
                            else if(ord($password[0])>=48 && ord($password[0])<=57)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $start_number_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $start_number_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $start_number_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $start_number_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $start_number_four++;
                                }
                            }
                            else
                            {
                                if($row["layout"]==="computer")
                                {

                                    $start_symbol_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $start_symbol_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $start_symbol_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $start_symbol_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $start_symbol_four++;
                                }
                            }
                            
                            /////////////////////////
                            
                            if(ord($password[$len])>=65 && ord($password[$len])<=90)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $end_letter_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $end_letter_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $end_letter_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $end_letter_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $end_letter_four++;
                                }
                            }
                            else if(ord($password[$len])>=97 && ord($password[$len])<=122)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $end_letter_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $end_letter_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $end_letter_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $end_letter_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $end_letter_four++;
                                }
                            }
                            else if(ord($password[$len])>=48 && ord($password[$len])<=57)
                            {
                                if($row["layout"]==="computer")
                                {

                                    $end_number_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $end_number_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $end_number_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $end_number_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                       $end_number_four++;
                                }
                            }
                            else
                            {
                                if($row["layout"]==="computer")
                                {

                                    $end_symbol_com++;

                                }
                                else if($row["layout"]==="layout1")
                                {
                                     $end_symbol_one++;
                                }
                                else if($row["layout"]==="layout2")
                                {
                                     $end_symbol_two++;
                                }
                                else if($row["layout"]==="layout3")
                                {
                                        $end_symbol_three++;
                                }
                                else if($row["layout"]==="layout4")
                                {
                                        $end_symbol_four++;
                                }
                            }
                        
			
				
		    }
                    
                    
		} else {
		    
		}
                $final["computer"]=$number_com;
                $final["layout1"]=$number_one;
                $final["layout2"]=$number_two;
                $final["layout3"]=$number_three;
                $final["layout4"]=$number_four;
                
                return $entropyFinal;
		$conn->close();
        }
        public function getTime($layout)               
        {
            $servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person where layout = '$layout' ";
                $result = $conn->query($sql);
                $avg_time = 0;
                $total_time = 0;
                $count=0;
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()){
                        $total_time=$total_time+$row["time"];
                        $count++;
                    }
                }
                else{
                    $avg_time=1;
                }
                $avg_time = $total_time/$count;
                return $avg_time;
                $conn->close();
        }
        public function getPeopleByAge($age1,$age2) {
            $servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person where age>='$age1' AND age<='$age2'";
                $result = $conn->query($sql);
                
                $count=0;
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()){
                        
                        $count++;
                    }
                }
                else{
                    $count=0;
                }
                
                return $count;
                $conn->close();
        }
        public function getPeopleByProfession($profession) {
            $servername = "localhost";
		$username = "id6772783_faruk";
		$password = "faruk";
		$dbname = "id6772783_faruk";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM new_person where profession = '$profession'";
                $result = $conn->query($sql);
                
                $count=0;
                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()){
                        
                        $count++;
                    }
                }
                else{
                    $count=0;
                }
                
                return $count;
                $conn->close();
        }
}
?>


