 <?php session_start();
 ?>
 
 <?php
 	$directionin	=    $_SESSION['directionin'] ;
$directionto	=	$_SESSION['directionto'] ;
						$tabledirection	= 	$_SESSION['tabledirection'] ;
						
					
						
					
						
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

						$sql = "SELECT Exchanger, Pay, Receive, Reserve, Mode, Reflink, ffrom, tto, Min FROM $tabledirection ORDER BY Receive DESC";
						$result = $conn->query($sql);
						$class = 0;
						if ($result->num_rows > 0) {
							echo "<table id='rates'><tr><th class='exchangername'>Exchanger</th><th>Pay</th><th>Receive</th><th>Reserve</th><th>Mode</th><th class='minamount'>Min Amount</th></tr>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
								if($row["Reserve"] !== '0.00'){
									$class = $class +1;
								echo "<tr><td class='exchangername'><a href=". $row["Reflink"]." target='_blank'>" . $row["Exchanger"]. "</a></td><td class='give'><a href=". $row["Reflink"]." target='_blank'> <span class='send".$class."'>". $row["Pay"]."</span> <span class=' labelfont from'>". $row["ffrom"]. "</span></a></td><td  class='get'><a  style='color:#007500' href=". $row["Reflink"]." target='_blank'><span class='gett".$class."'>". $row["Receive"]." </span><span class='labelfont from'>". $row["tto"]. "</span></a></td><td ><a href=". $row["Reflink"]." target='_blank'>" . $row["Reserve"]."</a></td><td class='modetd'><a href=". $row["Reflink"]." target='_blank'>" . $row["Mode"]. "</a></td><td class='minamount'><a href=". $row["Reflink"]." target='_blank'>" . $row["Min"]. "</a></td></tr>";
						$jpay =  $row["ffrom"];
						$yousend =  $row["Pay"];
						$jget =  $row["tto"];
						}
							}
							echo "</table>";
							$classfinal = $class + 1;
						} else {
							
						}

						$conn->close();
						?>