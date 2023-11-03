
<?php 


 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

      $name = $_POST['Exchangername'];
   
    $mode = $_POST['Exchangermode'];
	  $xmllink = $_POST['Exchangerxmllink'];
    $reflink = $_POST['reflink'];
    $email = $_POST['Exchangeremail'];
	

	
	
if ((!filter_var($email, FILTER_VALIDATE_EMAIL)) || (strpos($xmllink, 'http') === 1) || !filter_var($xmllink, FILTER_VALIDATE_URL) || (!isset($name) || trim($name) == '') || (!isset($mode) || trim($mode) == '') || (!isset($xmllink) || trim($xmllink) == '') || (!isset($email) || trim($email) == '')) {
 header('location:./addexchanger.php?st=invalidinputs');
 
}else{
    
 
      $file_name = 'xmlfiles/'.$name.'.xml';
                                  $file = fopen($file_name, "w");
                                  fwrite($file, "");
                                  fclose($file);
                                
                                 
                                    $ch = curl_init();
                                curl_setopt ($ch, CURLOPT_URL, $url);
                                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_HEADER, false);
                                curl_setopt ($ch, CURLOPT_CAINFO, __DIR__ . "/cacert.pem");
                                $xml_string = curl_exec($ch);
                                 curl_close($ch);
                                  $file = fopen($file_name, "w");
                                  fwrite($file, $xml_string);
                                  fclose($file);
    
    
    
    

                // Load the XML file
                $xml = simplexml_load_file('exchangername.xml');
                
                // Create a new record element
                $record = $xml->addChild('record');
                
                // Add child elements to the record element
                $record->addChild('Personid', 2);
                $record->addChild('Name', $name);
                $record->addChild('Mode', $mode);
                $record->addChild('XML', $xmllink);
                $record->addChild('Email', $email);
                $record->addChild('reflink', $reflink);
                
                // Save the updated XML file
                $xml->asXML('exchangername.xml');
                
                // Redirect the user to a success page
                header('location:./addexchanger.php?st=success');


    
    }
        
  
        
    }
else{
 header("location:./");
 exit();
}




$conn->close();

?>