<?php   session_start();

	if ( $_SERVER['REQUEST_URI'] != strtolower ( $_SERVER['REQUEST_URI'] ) )
    header ('Location: //' . $_SERVER['HTTP_HOST'] . strtolower ( $_SERVER['REQUEST_URI'] ));
	
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
	

		$from_to = $_GET['title'];				
		

		


$tabledirection = str_replace('"', '', $from_to);

$parts = explode('_', $from_to);
$urlfrom = $parts[0];
$urlto = $parts[1];


$urlfrom = str_replace('"', '', $urlfrom);
$urlto = str_replace('"', '', $urlto);


$urlfromclass = $urlfrom;
$urltoclass = $urlto. '1';

$preurlfrom = strtoupper($urlfrom);
$preurlto = strtoupper($urlto);

$a=array("Bitcoin"=>"BTC","Perfect Money USD"=>"PMUSD","Bitcoin Cash"=>"BCH","Ethereum"=>"ETH","Litcoin"=>"LTC","Ripple"=>"XRP","Dogecoin"=>"DOGE",
	"Monero"=>"XMR","Dash"=>"DASH","Zcash"=>"ZEC","Tether Omni"=>"USDTOMNI","Tether TRC20"=>"USDTTRC20","Tether ERC20"=>"USDTERC20","Tether BEP20"=>"USDTBEP20"
	,"USD Coin"=>"USDC","TrueUSD"=>"TUSD","Tron"=>"TRX","Stellar"=>"XLM","Webmoney WMZ"=>"WMZ","Webmoney WME"=>"WME","Webmoney WMK"=>"WMK"
	,"Webmoney WMX"=>"WMX","Paymer"=>"Paymer","Perfect Money EUR"=>"PMEUR","Perfect Money BTC"=>"PMBTC","Perfect e-Voucher USD"=>"PMV"
	,"Paypal USD"=>"PPUSD","Paypal EUR"=>"PPEUR","Paypal RUB"=>"PPRUB","Paypal GBP"=>"PPGBP","Advanced Cash USD"=>"ADVCUSD","Advanced Cash EUR"=>"ADVCEUR"
	,"Advanced Cash RUB"=>"ADVCRUB","Advanced Cash UAH"=>"ADVCUAH","Advanced Cash KZT"=>"ADVCKZT","Advanced Cash TRY"=>"ADVCTRY","Qiwi RUB"=>"QWRUB"
	,"Qiwi KZT"=>"QWKZT","Payeer USD"=>"PRUSD","Payeer EUR"=>"PREUR","Payeer RUB"=>"PRRUB","Skrill USD"=>"SKLUSD","Skrill EUR"=>"SKLEUR"
	,"Neteller USD"=>"NTLRUSD","Neteller EUR"=>"NTLREUR","Nixmoney USD"=>"NIXUSD","Nixmoney EUR"=>"NIXEUR");
	$urlfrom =  array_search($preurlfrom,$a);
	$urlto =  array_search($preurlto,$a);				
					
	
			$directioninclass =		  $_SESSION['directionin'] ;
  $directiontoclass =  $_SESSION['directionto'] ; 


error_reporting(E_ALL);
ini_set('display_errors', '0');
?>
<html>
 <head>

  	<meta charset="utf-8">
	<title>ushange.com</title>

<meta name="keywords" content="Tether, Crypyocurrency, obmen, обмен валют, обмен валют, обмен валют харьков, обменник валют, бестчендж, обменник, обменки, обмен криптовалют,
шахта обменник, best change, обменники валют онлайн, обменник криптовалют, crypto exchange, exchange cryptocurrency, best crypto, buy crypto, best crypto exchange, мониторинг, лучшие курсы, мониторинг обменников, курсы обмена, валюта, выгодный обмен, все обменники, обменные пункты, обменник, обмен валют, список обменников">
<meta name="description" content="ushange - мониторинг обменников, который предлагает актуальную информацию о курсах всех ведущих ручных и автоматических обменных пунктов электронных валют. Если вы хотите без труда найти выгодные курсы, вам поможет наш мониторинг обменных пунктов" />
 
 <meta name="viewport" content="width=960" />
<link href="style.css"  rel="stylesheet" type="text/css">
<link href="style2.css"  rel="stylesheet" type="text/css">
<link href="flags.css"  rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/png" href="./favicon.png"/>
  </head>

<style type="text/css">
	.indexa{
	pointer-events:auto;
}
</style>
<body>
<div class="top"></div>

<div class="bodymonitor">
  <header>

  <nav class="respo">
<div class="alltopsearch">
     <div class="logo logoheader">

	<a class="a" href="./">Exchanger Monitor <span>ushange v2.1</span></a></div></div>


				<ul class="rest">
					<li class="nav">   <a href="./" class="btn10 " >Exchange</a> </li>
					
						<span> | </span>
					<li class="nav">   <a href="./contact" class="btn10 contt" >Contact</a> </li>


							<div class="lang">
								<div class="chlang">
        
											<div class="flag flag-gb">

														<div id="lang2">
														
															<div class="russlang">
														<div class="flag flag-ru"></div>
																</div>
															<div class="eglang">
														<div class="flag flag-eg"></div>
																</div>
														
															
														</div>
															
															
														</div>
										
								</div>
										
						    </div>
            
            
            
				</ul>
				
						<div class="servertime">Server Time: <?php 
date_default_timezone_set('Africa/Cairo');
$date = date('m/d/Y h:i:s a', time());
echo date('l', strtotime($date)).', ';
echo date("d").' ';
echo date('F Y', strtotime($date));
echo date(" H:i:s");
?>
<br>
<span>Last Update: 
<?php 

					$servername = "localhost";
						$username = "ushoztkg_ushoose";
						$password = "Manager2015__";
						$dbname     = "ushoztkg_ushoose";
				

						// Create connection
						$conn = new mysqli($servername, $username, $password, $dbname);
						// Check connection
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						
						$sql = "SELECT elastupdate FROM lastadded WHERE ID = '1'";
						$result = $conn->query($sql);
					
						if ($result->num_rows > 0) {
						
							while($row = $result->fetch_assoc()) {
					
						$elastupdate =  $row["elastupdate"];
						
						
						echo $elastupdate;
					
							}
						}

?>
	
</span>




				











</div>
    </nav>





</header>
<div class=" gd"> </div>

<!-- *****************************************************************************-->

 

 <div class="scamdiv"><div class=" scamhead">Search</div></div>

<div class="myemail">
         
         
       <p> 
           <br>  
             <span class="emailicon"> 
           <span class="emailto"> </span>  
    
                 
                 
                 <?php
                 
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
$exclude_tables = array('exchangers', 'users', 'orders', 'mostdirection');
                 
          $bb = array("btc", "pmusd", "bch", "eth", "ltc", "xrp", "doge", "xmr", "dash", "zec", "usdtomni", "usdttrc20", "usdterc20", "usdtbep20", "usdc", "tusd", "trx", "xlm", "wmz", "wme", "wmk", "wmx", "paymer", "pmeur", "pmbtc", "pmv", "ppusd", "ppeur", "pprub", "ppgbp", "advcusd", "advceur", "advcrub", "advcuah", "advckzt", "advctry", "qwrub", "qwkzt", "prusd", "preur", "prrub", "sklusd", "skleur", "ntlrusd", "ntlreur", "nixusd", "nixeur");
  
$new_array = array();

for ($i = 0; $i < count($bb); $i++) {
  for ($j = 0; $j < count($bb); $j++) {
    if ($i != $j) {
      $new_array[] = $bb[$i] . '_' . $bb[$j];
    }
  }
}


    
               
                 

        
                 
  $aa = array( "pmusd" => "perfectmoneyusd", "bch" => "bitcoincash", "eth" => "ethereum", "ltc" => "litcoin", "xrp" => "ripple", "doge" => "dogecoin", "xmr" => "monero", "dash" => "dash", "zec" => "zcash", "usdtomni" => "tetheromni", "usdttrc20" => "tethertrc20", "usdterc20" => "tethererc20", "usdtbep20" => "tetherbep20", "usdc" => "usdcoin", "tusd" => "trueusd", "trx" => "tron", "xlm" => "stellar", "wmz" => "webmoneywmz", "wme" => "webmoneywme", "wmk" => "webmoneywmk", "wmx" => "webmoneywmx", "paymer" => "paymer", "pmeur" => "perfectmoneyeur", "pmbtc" => "perfectmoneybtc", "pmv" => "perfecte-voucherusd", "ppusd" => "paypalusd", "ppeur" => "paypaleur", "pprub" => "paypalrub", "ppgbp" => "paypalgbp", "advcusd" => "advancedcashusd", "advceur" => "advancedcasheur", "advcrub" => "advancedcashrub", "advcuah" => "advancedcashuah", "advckzt" => "advancedcashkzt", "advctry" => "advancedcashtry", "qwrub" => "qiwirub", "qwkzt" => "qiwikzt", "prusd" => "payeerusd", "prrub" => "payeerrub", "preur" => "payeereur", "sklusd" => "skrillusd", "skleur" => "skrilleur", "ntlrusd" => "netellerusd", "ntlreur" => "netellereur", "nixusd" => "nixmoneyusd", "nixeur" => "nixmoneyeur", "btc" => "bitcoin" );
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




                 
                 



                
                 
                 
                     $anotherone = array( "perfectmoneyusd" => "pmusd", "bitcoincash" => "bch", "ethereum" => "eth", "litcoin" => "ltc", "ripple" => "xrp", "dogecoin" => "doge", "monero" => "xmr", "dash" => "dash", "zcash" => "zec", "tetheromni" => "usdtomni", "tethertrc20" => "usdttrc20", "tethererc20" => "usdterc20", "tetherbep20" => "usdtbep20", "usdcoin" => "usdc", "trueusd" => "tusd", "tron" => "trx", "stellar" => "xlm", "webmoneywmz" => "wmz", "webmoneywme" => "wme", "webmoneywmk" => "wmk", "webmoneywmx" => "wmx", "paymer" => "paymer", "perfectmoneyeur" => "pmeur", "perfectmoneybtc" => "pmbtc", "perfecte-voucherusd" => "pmv", "paypalusd" => "ppusd", "paypaleur" => "ppeur", "paypalrub" => "pprub", "paypalgbp" => "ppgbp", "advancedcashusd" => "advcusd", "advancedcasheur" => "advceur", "advancedcashrub" => "advcrub", "advancedcashuah" => "advcuah", "advancedcashkzt" => "advckzt", "advancedcashtry" => "advctry", "qiwirub" => "qwrub", "qiwikzt" => "qwkzt", "payeerusd" => "prusd", "payeerrub" => "prrub", "payeereur" => "preur", "skrillusd" => "sklusd", "skrilleur" => "skleur", "netellerusd" => "ntlrusd", "netellereur" => "ntlreur", "nixmoneyusd" => "nixusd", "nixmoneyeur" => "nixeur", "bitcoin" => "btc" );    
                 
                 
                 
              
            
                 
                 
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

if (!empty($result)) {
    echo $result;
} else {
    // handle case where no match is found
}
          
         
                 
                 
                 
                 
                 
                 
                 


                 
    
                 
                 
                 
                 
                 
                 
                 
                 
                 
?>

                 
                 
     </span>
</p>
         </div>


<div class="bfooter" >
<?php
// Replace with your database details
 
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

// Output tables as HTML


if (!empty($tables)) {
  echo '<ul>';
  foreach ($tables as $table) {
    echo '<li> ' . $table . ', </li>';
  }
  echo '</ul>';
}
    
    
   
// Close connection
$conn->close();
?>



</div>


<span class="update"></span>
<input type="hidden" class="amountbefore" >
<div class="footerr" >
<div class="leftcopright" >
Copyright © 2021-<?php echo date("Y");?> USHANGE.COM. All Rights Reserved.
</div>

	<ul class="rest restfooter">
						<li class="nav ">  <a href="./contact" class="btn10 rightbtn" >Контакты</a></li>
				

</ul></div></div>

</body>


</html>

