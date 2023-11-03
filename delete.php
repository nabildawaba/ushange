
<?php


error_reporting(0);
ini_set('display_errors', 0);

						
						
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
						
						
						
						$sql = "SELECT XML FROM ExchangersNames ORDER BY Personid DESC";
						$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							
							// output data of each row
							while($row = $result->fetch_assoc()) {
								
								$url = 'https://2rbina.net/request-exportxml.xml?lang=ru';
								
								
						

								$ch = curl_init();
								curl_setopt ($ch, CURLOPT_URL, $url);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_CAINFO, __DIR__ . "/cacert.pem");
								$xmll = curl_exec($ch);
							
								
	
								$xml = simplexml_load_string($xmll);
	
	
									

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
										$Reflink = 'https://2rbina.net/?rid=44213';
										 
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
						
				
									$stto1 = "DELETE FROM $tabledirection WHERE Link='$url'";
										if ($conn->query($stto1) === TRUE){}
						
							
										
										 
										}

							
								
								
							}
							
						} else {
						
						}

						$conn->close();






?>



