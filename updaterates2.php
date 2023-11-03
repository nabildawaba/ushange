
<?php


  ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
						
							$servername2 = "localhost";
						$username2 = "ushoztkg_ushoose";
						$password2 = "Manager2015__";
						$dbname2     = "ushoztkg_ushoose";
						
						$conn2 = new mysqli($servername2, $username2, $password2, $dbname2);
						// Check connection
						if ($conn2->connect_error) {
							die("Connection failed: " . $conn2->connect_error);
						}
						
						date_default_timezone_set('Africa/Cairo');
$date = date('m/d/Y h:i:s a', time());
$eupdate1 = date('l', strtotime($date)).', ';
$eupdate2 = date("d").' ';
$eupdate3 = date('F Y', strtotime($date));
$eupdate4 = date(" H:i:s");
						
				
						$updatedate = $eupdate1.$eupdate2.$eupdate3.$eupdate4;
						$elastupdate = "UPDATE lastadded SET elastupdate='$updatedate' WHERE ID='1'";
										if ($conn2->query($elastupdate) === TRUE){}
						$conn2->close();
						$servername = "localhost";
							$username = "ushoztkg_ushangeuser";
						$password = "Hamo1omah1";
						$dbname = "ushoztkg_ushange";
				

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						
						
						$sql = "SELECT Name, Mode, XML, Email FROM ExchangersNames WHERE Name='Турбина'";
						
						$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							
							// output data of each row
							while($row = $result->fetch_assoc()) {
								
								$url = $row["XML"];
							$name = $row["Name"];
								
						  
                                            $exclude_tables = array('exchangers', 'users', 'orders', 'mostdirection');

// Get list of tables
                                            $tables = array();
                                            $result = $conn->query("SHOW TABLES");
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_array()) {

                                                   $table_name = $row['Tables_in_' . $dbname];
                                                if (!(strpos($table_name, $exclude_tables[0]) !== false ||
                                                    strpos($table_name, $exclude_tables[1]) !== false ||
                                                    strpos($table_name, $exclude_tables[2]) !== false|
                                                    strpos($table_name, $exclude_tables[3]) !== false)) {
                                                    $tables[] = $table_name;
                                                }




                                                }
                                            }
                                            
                                              foreach ($tables as $table) {
                                     
                                                    $dtto1 = "DELETE FROM  $table  WHERE Link='$url'";
									
										if ($conn->query($dtto1) === TRUE){
                                            echo 'yes';
                                        }
                                      }
						

								$ch = curl_init();
								curl_setopt ($ch, CURLOPT_URL, $url);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_CAINFO, __DIR__ . "/cacert.pem");
								$outputt = curl_exec($ch);
							
								
	
								$xml = simplexml_load_string($outputt);
	
	
									

										foreach($xml->item as $item) {
									
									

										  $give = $item->in;
										  $get = $item->out;										 
										  $yousend = 1.00;
										  
										  $from = $item->from;
										  $to= $item->to;
										 
										   if($from == 'Bitcoin'){
											
											  $from = str_replace("Bitcoin","BTC",$from);
										  }
										  $to= $item->to;
										   if($to == 'Bitcoin'){
											
											  $from = str_replace("Bitcoin","BTC",$to);
										  }
									
										  
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
							
						} else {
						
						}

						$conn->close();






?>



