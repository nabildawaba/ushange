<?php


$file_path = '/home/ushoztkg/ushange.com/popularrates.xml';

if (file_exists($file_path)) {
    // Delete the file
    unlink($file_path);
   
} else {
   
}

$dir = "/home/ushoztkg/ushange.com/xmlfiles/";
$files = glob($dir . "*.xml");


    
$xml_file = '/home/ushoztkg/ushange.com/mostdirection.xml';
$xml = simplexml_load_file($xml_file);

$data = $xml->xpath('//record'); // Get all the 'record' nodes

usort($data, function($a, $b) { // Sort the nodes by 'timess' attribute in descending order
    return (int) $b->timess - (int) $a->timess;
});

$top10 = array_slice($data, 0, 9); // Get the top 10 nodes based on 'timess' attribute

foreach ($top10 as $node) {
        $dfrom_to = (string)$node->from_to;
    $dfrom = (string)$node->dfrom;
    $dto = (string)$node->dto;
                            
                          

$highest_out = 0;
$highest_from = "";
$highest_to = "";
$highest_name = "";
$highest_file = "";


$highest_reserve = 0;
$highest_minamount = 0;
$highest_maxamount = 0;

                        
// Loop through each file
foreach ($files as $file) {
  // Step 2
  $xml = simplexml_load_file($file);
  
  // Loop through each "item" node
  foreach ($xml->item as $item) {
         if ($item->from == $dfrom && $item->to == $dto) {
 $give = $item->in;
										  $get = $item->out;
										  $yousend = 1.00;
										  $from = $item->from;
          
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
                                        $reserve = abs($reserve);
										  $reserve1 = number_format((float)$reserve, 2, '.', '');
                                        if($get1 < 1){
											    $get2 =  number_format($get1, 7, '.', '');
												
										  }else{
											      $get2 =  number_format($get1, 2, '.', '');
												
										  }
      $tablename = $from.'_'.$to;
 
      if ($get2 > $highest_out) {
        $highest_out = $get2;
        $highest_from = $from;
        $highest_to = $to;
        $highest_reserve = $reserve;
        $highest_file = $file;
          $highest_minamount = $minamount;
          $highest_maxamount = $maxamount;
          $highesttablename = $highest_from.'_'.$highest_to;
      }
  }
  }
}

if (file_exists('/home/ushoztkg/ushange.com/popularrates.xml')) {
    $new_xml = simplexml_load_file('/home/ushoztkg/ushange.com/popularrates.xml');
} else {
    $new_xml = new SimpleXMLElement('<rates></rates>');
}

$new_item = $new_xml->addChild('item');
$new_item->addChild('from', $highest_from);
$new_item->addChild('to', $highest_to);
$new_item->addChild('in', 1);
$new_item->addChild('out', $highest_out);
$new_item->addChild('amount', $highest_reserve);
$new_item->addChild('minamount', $highest_minamount);
$new_item->addChild('maxamount', $highest_maxamount);
$new_item->addChild('from_to', $highesttablename);

// Step 6
$fname = basename($highest_file, ".xml");
                            



$xml = simplexml_load_file('/home/ushoztkg/ushange.com/exchangername.xml'); // Load the XML file



// Find the 'record' node that matches the WHERE clause and retrieve the data
$record = $xml->xpath("//record[Name='$fname']")[0];
$mode = (string) $record->Mode;
$xmlData = (string) $record->XML;
$email = (string) $record->Email;
$reflink = (string) $record->reflink;

// Step 7
$new_item->addChild('mode', $mode);
$new_item->addChild('xml', $xmlData);
$new_item->addChild('email', $email);
$new_item->addChild('reflink', $reflink);
$new_item->addChild('name', $fname);






echo $fname.'  '.$highest_out.'  '.$dfrom_to.'  ';
                            

  file_put_contents('/home/ushoztkg/ushange.com/popularrates.xml', $new_xml->asXML());


                         

  
                                }


?>