
<?php 


  ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
		$servername = "localhost";
							$dbUsername = "ushoztkg_ushangeuser";
						$dbPassword = "Hamo1omah1";
						$dbname = "ushoztkg_ushange";
				
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

if(!$conn){
die("connection failed: ".mysqli_connect_error());
}


    if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $name = $_POST['nameinput'];
   
    $mode = $_POST['modeinput'];
	  $url = $_POST['xmlinput'];
 
	   $reflink = $_POST['reflink'];
 

    
	
			$ch = curl_init();
								curl_setopt ($ch, CURLOPT_URL, $url);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_CAINFO, "cacert.pem");
								$outputt = curl_exec($ch);
								
								if(curl_exec($ch) === false)
    { echo 'Curl error: ' . curl_error($ch); }
else
    { echo 'Operation completed without any errors'; }
								
									
		$xml = simplexml_load_string($outputt);

				
        foreach($xml->item as $item) {
										
										  $give = $item->in;
										  $get = $item->out;
										  $yousend = 1.00;
										  $from = $item->from;
            echo $from;	
										  if($from == 'Bitcoin'){
										 
											  $from = str_replace("Bitcoin","BTC",$from);
										  }
										  $to= $item->to;
										   if($to == 'Bitcoin'){
											 
											  $from = str_replace("Bitcoin","BTC",$to);
										  }
									 if ($from == 'PPUSD' || $from == 'PPEUR' || $from == 'PPGBP' || $from == 'PPRUB' || $from == 'NTLRUSD' || $from == 'NTLREUR' || $from == 'SKLUSD' || $from == 'SKLEUR' || 
                                $to == 'PPUSD' || $to == 'PPEUR' || $to == 'PPGBP' || $to == 'PPRUB' || $to == 'NTLRUSD' || $to == 'NTLREUR' || $to == 'SKLUSD' || $to == 'SKLEUR') {
                                    $mode = 'Manual';
                            }
										  $minamount= $item->minamount;
										  $maxamount= $item->maxamount;
										  $give1 = number_format($yousend, 2, '.', ' ');
										  $get1 =  $yousend * $get / $give;
										  $gget1 = number_format($get1, 2);
										  $get2 =  number_format($get1, 2, '.', '');
										  $get22 =  number_format($get1, 2, '.', '');
										  $reserve = $item->amount;
										  $reserve1 = number_format((float)$reserve, 2, '.', '');

$tablename = $from.'_'.$to;
             $check = "SELECT * FROM `$name`";
         if($result =  mysqli_query($conn, $check)){
             
           $sql = "INSERT INTO `$name` (from_to, Pay, Receive, Reserve, ffrom, tto, Link, Mode, Reflink, Min, Max)
         SELECT '$tablename', '$yousend', '$get2', '$reserve1', '$from', '$to', '$url', '$mode', '$reflink', '$minamount', '$maxamount'
         FROM DUAL
         WHERE NOT EXISTS (SELECT 1 FROM `$name` WHERE from_to = '$tablename')";


						if ($conn->query($sql) === TRUE) {
						header('location:./addexchangerforadminn.php?st=success');
						} else {
						header('location:./addexchangerforadminn.php?st=wrong');
						}


         }else{
			 
			 $sql = "CREATE TABLE `$name` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
from_to VARCHAR(500) NOT NULL,
Pay VARCHAR(30) NOT NULL,
Receive VARCHAR(30) NOT NULL,
Reserve VARCHAR(30) NOT NULL,
ffrom VARCHAR(30) NOT NULL,
tto VARCHAR(30) NOT NULL,
Link VARCHAR(1000) NOT NULL,
Mode VARCHAR(30) NOT NULL,
Reflink VARCHAR(1000) NOT NULL,
Min VARCHAR(100) NOT NULL,
Max VARCHAR(100) NOT NULL,
updated VARCHAR(100) NOT NULL
 )";

if ($conn->query($sql) === TRUE) {
    
   
  $sql = "INSERT INTO `$name` (from_to, Pay, Receive, Reserve, ffrom, tto, Link, Mode, Reflink, Min, Max)
						VALUES ('$tablename', '$yousend', '$get2', '$reserve1', '$from', '$to', '$url', '$mode', '$reflink', '$minamount', '$maxamount')";

						if ($conn->query($sql) === TRUE) {
						header('location:./addexchangerforadminn.php?st=success');
						} else {
                        header('location:./addexchangerforadminn.php?st=wrong');

						}
} else {
  
}

		 }



 

										 
										
										
										
										}
	

    
    
  
        
  
        
    }
else{
 header("location:./");
 exit();
}




$conn->close();

?>