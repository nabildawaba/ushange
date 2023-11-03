
<?php


error_reporting(0);
ini_set('display_errors', 0);

						$servername = "localhost";
						$username = "admin";
						$password = "";
						$dbname = "test";

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						
						$sql = "SELECT XML FROM ExchangersNames ORDER BY Personid DESC";
						$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							
							// output data of each row
							while($row = $result->fetch_assoc()) {
								
								$url = $row["XML"];
								
								
										$xml = simplexml_load_file($url);

										foreach($xml->item as $item) {
									
										  $give = $item->in;
										  $get = $item->out;										 
										  $yousend = 1.00;
										  
										  $from = $item->from;
										  $to= $item->to;
										  $give1 = number_format($yousend, 2, '.', ' ');
										  $get1 =  $yousend * $get / $give;
										  $gget1 = number_format($get1, 2);
										  if($get1 < 1){
											    $get2 =  number_format($get1, 7, '.', '');
												
										  }else{
											      $get2 =  number_format($get1, 2, '.', '');
												
										  }
										
										 
										  $reserve = $item->amount;
										  $reserve1 = number_format((float)$reserve, 2, '.', '');
											$tabledirection = $from.'_'.$to;
									
										/*
										$sqll = "INSERT INTO exchangers (Exchanger, Pay, Receive, Reserve, ffrom, tto)
											 VALUES ('$name1', 10, $gget1,$stramount1,'$ffrom1','$tto')"; 

										if ($conn->query($sqll) === TRUE) {
										  echo "New record created successfully"; 
										} else {
											/*echo "Error: " . $sqll . "<br>" . $conn->error;
										}
										*/

										$Reserve = "UPDATE $tabledirection SET Reserve='$reserve1' WHERE Link='$url'";
										$Receive = "UPDATE $tabledirection SET Receive='$get2' WHERE Link='$url'";
										$Pay = "UPDATE $tabledirection SET Pay='$yousend' WHERE Link='$url'";
										$sffrom1 = "UPDATE $tabledirection SET ffrom='$from' WHERE Link='$url'";
										$stto1 = "UPDATE $tabledirection SET tto='$to' WHERE Link='$url'";
										if ($conn->query($Reserve) === TRUE){}
										if ($conn->query($Receive) === TRUE){}
										if ($conn->query($Pay) === TRUE){}
										if ($conn->query($sffrom1) === TRUE){}
										if ($conn->query($stto1) === TRUE){}
										
									
										
										
										}

							
								
								
							}
							echo "</table>";
						} else {
							echo "0 results";
						}

						$conn->close();






?>



