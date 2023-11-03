<?php 
session_start();



    if ($_SERVER["REQUEST_METHOD"] == "POST"){




      $directionin = $_POST['directionin'];
   
    $directionto = $_POST['directionto'];
	
	   $directioninto = $directionin.'_'.$directionto ;
if((empty($directionin)) || (empty($directionto)) ){
		$unerscore = "";
}else{
		if ($_SESSION['directioninto'] == $directioninto ){
	
}else{
	
	




	$xml = simplexml_load_file('mostdirection.xml'); // Load the XML file
$record = $xml->xpath("//record[from_to='$directioninto']")[0]; // Get the 'record' node with matching 'from_to' attribute

if ($record) {
    $timess = (int) $record->timess + 1;
    $record->timess = $timess; // Update the 'timess' attribute in the XML file
} else {
    $newRecord = $xml->addChild('record'); // Create a new 'record' node
    $newRecord->addChild('dfrom', $directionin);
    $newRecord->addChild('dto', $directionto);
    $newRecord->addChild('from_to', $directioninto);
    $newRecord->addChild('timess', 1);
}

$xml->asXML('mostdirection.xml'); // Save the updated XML file







						} 
		
    

	
	

	
	
	$directionin2 = preg_replace('/\s+/', '', $directionin);
$directionto2 = preg_replace('/\s+/', '', $directionto);
	
      $directioninclass = $_POST['directioninclass'];
   
    $directiontoclass = $_POST['directiontoclass'];
	
	
	
	
	
    $_SESSION['directionin'] = $directionin;

    $_SESSION['directionto'] = $directionto;
	 $_SESSION['directioninto'] = $_SESSION['directionin'].'_'.$_SESSION['directionto'];
    
  $_SESSION['directioninclass'] = $directioninclass;
   $_SESSION['directiontoclass'] = $directiontoclass;

 $_SESSION['check'] = 1;

 $directioninlow = strtolower($directionin2);
   
    $directiontolow = strtolower($directionto2);



	

$unerscore = "_";
}
  header("location:./index.php?title=".$directioninlow.$unerscore. $directiontolow);
        
    }
else{
	$conn->close();
 header("location:./");
 exit();
}





?>