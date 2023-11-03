<?php 
session_start();
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
						

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
 $directioninto = $_POST['keyword'];
  $directioninto = str_replace(' ', '', $directioninto);
        

$tabledirection = str_replace('"', '', $directioninto);
        
 $tabledirection0 =  strtoupper($directioninto);

$parts = explode('_', $directioninto);
$urlfrom = $parts[0];
$urlto = $parts[1];

$urlfrom = strtolower($urlfrom);
$urlto = strtolower($urlto);


                 
         $bb = array("wireusd", "wireeur", "mgusd", "mgeur", "wuusd", "wueur","btc", "pmusd", "bch", "eth", "ltc", "xrp", "doge", "xmr", "dash", "zec", "usdtomni",
"usdttrc20","usdterc20","usdtbep20","usdtsol","usdtpolygon","usdcerc20","usdctrc20","usdcbep20","usdcsol","usdcpolygon","tusdtrc20","tusderc20", "trx", "xlm", "wmz", "wme", "wmk", "wmx", "paymer", "pmeur", "pmbtc", "pmv", "ppusd", "ppeur", "pprub", "ppgbp", "advcusd", "advceur", "advcrub", "advcuah", "advckzt", "advctry", "qwrub", "qwkzt", "prusd", "preur", "prrub", "sklusd", "skleur", "ntlrusd", "ntlreur", "nixusd", "nixeur");
$new_array = array();

for ($i = 0; $i < count($bb); $i++) {
  for ($j = 0; $j < count($bb); $j++) {
    if ($i != $j) {
      $new_array[] = $bb[$i] . '_' . $bb[$j];
    }
  }
}


    
          $aa = array( "wireusd" => "bankaccountusd", "wireeur" => "bankaccounteur", "mgusd" => "moneygramusd", "mgeur" => "moneygrameur", "wuusd" => "westernunionusd", "wueur" => "westernunioneur", "btc" => "bitcoin", "pmusd" => "perfectmoneyusd", "bch" => "bitcoincash", "eth" => "ethereum", "ltc" => "litcoin", "xrp" => "ripple", "doge" => "dogecoin", "xmr" => "monero", "dash" => "dash", "zec" => "zcash", "usdtomni" => "tetheromni", "usdttrc20" => "tethertrc20", "usdterc20" => "tethererc20", "usdtbep20" => "tetherbep20", "usdtsol" => "tethersol", "usdtpolygon" => "tetherpolygon", "usdcerc20" => "usdcoinerc20", "usdctrc20" => "usdcointrc20", "usdcbep20" => "usdcoinbep20", "usdcsol" => "usdcoinsol", "usdcpolygon" => "usdcoinpolygon", "tusdtrc20" => "trueusdtrc20", "tusderc20" => "trueusderc20", "trx" => "tron", "xlm" => "stellar", "wmz" => "webmoneywmz", "wme" => "webmoneywme", "wmk" => "webmoneywmk", "wmx" => "webmoneywmx", "paymer" => "paymer", "pmeur" => "perfectmoneyeur", "pmbtc" => "perfectmoneybtc", "pmv" => "perfecte-voucherusd", "ppusd" => "paypalusd", "ppeur" => "paypaleur", "pprub" => "paypalrub", "ppgbp" => "paypalgbp", "advcusd" => "advancedcashusd", "advceur" => "advancedcasheur", "advcrub" => "advancedcashrub", "advcuah" => "advancedcashuah", "advckzt" => "advancedcashkzt", "advctry" => "advancedcashtry", "qwrub" => "qiwirub", "qwkzt" => "qiwikzt", "prusd" => "payeerusd", "preur" => "payeereur", "prrub" => "payeerrub", "sklusd" => "skrillusd", "skleur" => "skrilleur", "ntlrusd" => "netellerusd", "ntlreur" => "netellereur", "nixusd" => "nixmoneyusd", "nixeur" => "nixmoneyeur" );     
              
        

	$urlfrom =  array_search($preurlfrom,$aa);
	$urlto =  array_search($preurlto,$aa);		            
                 
                 
                 
  

$c = array();
foreach ($new_array as $str) {
  $parts = explode('_', $str);
  $c[] = $aa[$parts[0]] . '_' . $aa[$parts[1]];
}
//==========================
                 
             
$new_array_c = array();

foreach ($new_array as $index => $value) {
  $keys = explode('_', $value);
  $values = explode('_', $c[$index]);
  $new_array_c[$keys[0] . '_' . $keys[1]] = $values[0] . '_' . $values[1];
}



        
       //===============         
 
       
                 
              


$z = $new_array_c;



$output = array();

foreach ($z as $key => $value) {
    $key_parts = explode('_', $key);  
    $value_parts = explode('_', $value);   
    
    $new_key = $value_parts[0] . '_' . $key_parts[1];
    $new_value = $key_parts[0] . '_' . $value_parts[1];
    
    $output[$new_key] = $new_value;
}

     
//-============



$final_z = array();
foreach ($output as $key => $value) {
    $final_z[] = $key;
    $final_z[] = $value;
}




                 
                 



                
                 
                 
                 
                 
                 
                 
             
             $anotherone = array("bankaccountusd" => "wireusd", "bankaccounteur" => "wireeur", "moneygramusd" => "mgusd", "moneygrameur" => "mgeur", "westernunionusd" => "wuusd", "westernunioneur" => "wueur", "bitcoin" => "btc", "perfectmoneyusd" => "pmusd", "bitcoincash" => "bch", "ethereum" => "eth", "litcoin" => "ltc", "ripple" => "xrp", "dogecoin" => "doge", "monero" => "xmr", "dash" => "dash", "zcash" => "zec", "tetheromni" => "usdtomni", "tethertrc20" => "usdttrc20", "tethererc20" => "usdterc20", "tetherbep20" => "usdtbep20", "tethersol" => "usdtsol", "tetherpolygon" => "usdtpolygon", "usdcoinerc20" => "usdcerc20", "usdcointrc20" => "usdctrc20", "usdcoinbep20" => "usdcbep20", "usdcoinsol" => "usdcsol", "usdcoinpolygon" => "usdcpolygon", "trueusdtrc20" => "tusdtrc20", "trueusderc20" => "tusderc20", "tron" => "trx", "stellar" => "xlm", "webmoneywmz" => "wmz", "webmoneywme" => "wme", "webmoneywmk" => "wmk", "webmoneywmx" => "wmx", "paymer" => "paymer", "perfectmoneyeur" => "pmeur", "perfectmoneybtc" => "pmbtc", "perfecte-voucherusd" => "pmv", "paypalusd" => "ppusd", "paypaleur" => "ppeur", "paypalrub" => "pprub", "paypalgbp" => "ppgbp", "advancedcashusd" => "advcusd", "advancedcasheur" => "advceur", "advancedcashrub" => "advcrub", "advancedcashuah" => "advcuah", "advancedcashkzt" => "advckzt", "advancedcashtry" => "advctry", "qiwirub" => "qwrub", "qiwikzt" => "qwkzt", "payeerusd" => "prusd", "payeereur" => "preur", "payeerrub" => "prrub", "skrillusd" => "sklusd", "skrilleur" => "skleur", "netellerusd" => "ntlrusd", "netellereur" => "ntlreur", "nixmoneyusd" => "nixusd", "nixmoneyeur" => "nixeur" );    
                 
                 

              
            
                        
       $search_term = $tabledirection;
$keywords = array_merge($new_array, $c, $final_z); // add the third array $d

$thresholds = array(0, 1, 2, 3); // set the threshold values to try
$result = '';

foreach ($thresholds as $threshold) {
    $matches = array();
    foreach ($keywords as $keyword) {
        $distance = levenshtein($search_term, $keyword);
        if ($distance <= $threshold) {
            $matches[] = $keyword;
        }
    }
    
    if (count($matches) > 0) {
        $match = $matches[0]; // get the first match
        $search_values = explode("_", $match);
        $replace_values = array();
        foreach ($search_values as $value) {
            $replace_values[] = str_replace(array_keys($anotherone), array_values($anotherone), $value);
        }
        $result = implode("_", $replace_values);
        break; // exit the loop if a match is found
    }
}

   
         
            
                 
                 
         $upperresult =  strtoupper($result);

        $parts = explode("_", $upperresult);
        $first_part = $parts[0]; // "BTC"
        $second_part = $parts[1]; // "PMUSD"  

                 
					
                
                 
$xml = simplexml_load_file('mostdirection.xml'); // Load the XML file
$record = $xml->xpath("//record[from_to='$upperresult']")[0]; // Get the 'record' node with matching 'from_to' attribute

if ($record) {
    $timess = (int) $record->timess + 1;
    $record->timess = $timess; // Update the 'timess' attribute in the XML file
} else {
    $newRecord = $xml->addChild('record'); // Create a new 'record' node
    $newRecord->addChild('dfrom', $first_part);
    $newRecord->addChild('dto', $second_part);
    $newRecord->addChild('from_to', $upperresult);
    $newRecord->addChild('timess', 1);
}

$xml->asXML('mostdirection.xml'); // Save the updated XML file

        
        
        
        
        
        
        
        
        
  header("location:./index.php?title=".$result);
        
    }
else{
	$conn->close();
 header("location:./");
 exit();
}





?>