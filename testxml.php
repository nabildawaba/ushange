<?php   session_start();
exec('python3 myapp/app.py');
	if ( $_SERVER['REQUEST_URI'] != strtolower ( $_SERVER['REQUEST_URI'] ) )
    header ('Location: //' . $_SERVER['HTTP_HOST'] . strtolower ( $_SERVER['REQUEST_URI'] ));
if($_SESSION['lang'] == 'ar'){
    
}else{
    $lang = $_GET['lang'];	
    $_SESSION['lang'] = $lang;
}
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
	$from_to = $_GET['title'];
$venv_path = '/home/ushoztkg/virtualenv/ushange.com/myapp/3.9/bin/activate';
$project_path = '/home/ushoztkg/ushange.com/myapp';
$ip = $_SERVER['REMOTE_ADDR'];

// Activate the virtual environment
$from_to2 = $_GET['title'] ?? 'index';
$title = $from_to2;
$title2 = $_SESSION['title'] ;
$_SESSION['title'] = $from_to2;
 
if($title2 == $title){}else{
    

// Set the path to the IP file
$filename = "./myapp/unique_ips.txt";


// Read the file into an array
$file_contents = file($filename);

// Loop through the array to find the line containing the IP address
foreach ($file_contents as $key => $line) {
    if (strpos($line, "{$title}:") !== false) {
        // Found the line containing the IP address
        $file_contents[$key] = str_replace(",'{$ip}'", '', $line);
        break;
    }
}

// Write the modified array back to the file
file_put_contents($filename, implode('', $file_contents));


}
			





$command = "source $venv_path && ";

// Change directory to the project path
$command .= "cd $project_path && ";
$from_to_escaped = escapeshellarg($from_to2);
$ip_escaped = escapeshellarg($ip);

$from_to_escaped = str_replace("'", '', $from_to_escaped);
$titlewithout = str_replace(array('.', ','), '', $from_to_escaped);
// Run the Python script
$command .= "python app.py --ip \"$ip_escaped\" --title \"$titlewithout\"";



// Execute the command
    $output = shell_exec($command);

$command2 = "deactivate";
$output2 = shell_exec($command2);



 

			
		

		$tabledirection =  strtoupper($from_to);


$tabledirection = str_replace('"', '', $tabledirection);

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
$arabicnames=array("بيتكوين"=>"BTC","بيرفكت موني"=>"PMUSD","بيتكوين كاش"=>"BCH","ايثيريوم"=>"ETH","ليتكوين"=>"LTC","ربل"=>"XRP","دوجي كوين"=>"DOGE",
	"مونيرو"=>"XMR","داش"=>"DASH","ذ كاش"=>"ZEC","تيثر اومني"=>"USDTOMNI","تيثر"=>"USDTTRC20","تيثر ايثريوم"=>"USDTERC20","تيثر بينانس"=>"USDTBEP20"
	,"عملة الدولار"=>"USDC","ترو دولار"=>"TUSD","ترون"=>"TRX","ستيلار"=>"XLM","ويب موني"=>"WMZ","ويب موني يورو"=>"WME","ويب موني تينغ"=>"WMK"
	,"ويب موني اكس"=>"WMX","باي مير"=>"Paymer","بيرفكت موني يورو"=>"PMEUR","بيرفكت موني بيتكوين"=>"PMBTC","بيرفكت موني كود"=>"PMV"
	,"باي بال"=>"PPUSD","باي بال يورو"=>"PPEUR","باي بال روبل"=>"PPRUB","باي بال جنيه"=>"PPGBP","ادفكاش"=>"ADVCUSD","ادفكاش يورو"=>"ADVCEUR"
	,"ادفكاش روبل"=>"ADVCRUB","ادفكاش هيرفنا"=>"ADVCUAH","ادفكاش تينغ"=>"ADVCKZT","ادفكاش ليرة"=>"ADVCTRY","كيوي روبل"=>"QWRUB"
	,"كيوي تينغ"=>"QWKZT","بايير"=>"PRUSD","بايير يورو"=>"PREUR","بايير روبل"=>"PPRUB","سكريل"=>"SKLUSD","سكريل يورو"=>"SKLEUR"
	,"نتلر"=>"NTLRUSD","نتلر يورو"=>"NTLREUR","نكس موني"=>"NIXUSD","نكس موني يورو"=>"NIXEUR");
    if($lang == "ar"){
        $arurlfrom =  array_search($preurlfrom,$arabicnames);
	$arurlto =  array_search($preurlto,$arabicnames);	
    }else{
	$arurlfrom =  array_search($preurlfrom,$a);
	$arurlto =  array_search($preurlto,$a);				
    }
	$urlfrom =  array_search($preurlfrom,$a);
	$urlto =  array_search($preurlto,$a);				
					
	       $bb = array("btc", "pmusd", "bch", "eth", "ltc", "xrp", "doge", "xmr", "dash", "zec", "usdtomni", "usdttrc20", "usdterc20", "usdtbep20", "usdc", "tusd", "trx", "xlm", "wmz", "wme", "wmk", "wmx", "paymer", "pmeur", "pmbtc", "pmv", "ppusd", "ppeur", "pprub", "ppgbp", "advcusd", "advceur", "advcrub", "advcuah", "advckzt", "advctry", "qwrub", "qwkzt", "prusd", "preur", "prrub", "sklusd", "skleur", "ntlrusd", "ntlreur", "nixusd", "nixeur");
  $smalltabledirection = strtolower($tabledirection);
$new_array = array();

for ($i = 0; $i < count($bb); $i++) {
  for ($j = 0; $j < count($bb); $j++) {
    if ($i != $j) {
      $new_array[] = $bb[$i] . '_' . $bb[$j];
    }
  }
}   
    
			$directioninclass =		  $_SESSION['directionin'] ;
  $directiontoclass =  $_SESSION['directionto'] ; 


?>
<html>
 <head>
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
						if (in_array($smalltabledirection, $new_array)) {
  // do something

     
				$arows = array(); // initialize empty array
		
						$sql = "SELECT Name, Mode, XML, Email, reflink FROM oldExchangersNames ORDER BY Personid ASC";
						
						$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							
							// output data of each row
							while($row = $result->fetch_assoc()) {
                                
                                	$url = $row["XML"];
								$fname = $row["Name"];
                                $reflink = $row["reflink"];
                                 $mode = $row["Mode"];
                                $file_name = 'xmlfiles/'.$fname.'.xml';
                                $xml = simplexml_load_file($file_name);
                                foreach ($xml->item as $item) {
    // Check if the <from> and <to> values match your criteria
    if ($item->from == $preurlfrom && $item->to == $preurlto) {
        // If they match, print out the other values in the <item> section
        			
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
                                        if(
                            $mode == 'Automatic'
                            ){
                                $mode='ATM';
                            }else{
                                $mode='MNL';
                            }
										
$new_row = "<tr><td class='hash'><a  target='_blank'> <span class='hash'>.</span> </a></td><td class='exchangername label'><a  href= target='_blank' style=' text-decoration:underline; color:#CC3300; text-shadow: 0 0 1px #fff;' ><span>".$fname."</span></a></td><td class='give'><a  target='_blank'> <span class='send'>". $yousend."</span> <span class=' labelfont from'>". $from. "</span></a></td><td  class='get'><a    target='_blank'><span class='gett'>". $get2." </span><span class='labelfont from'>". $to. "</span></a></td><td ><a  target='_blank'>" . $reserve1."</a></td><td class='modetd'><a  target='_blank'>" . $mode. "</a></td><td class='minamount'><a  target='_blank'>" . $minamount. "</a></td></tr>";
    
    // add new element to end of $rows array
    $arows[] = $new_row;
// Example array of <tr> elements with values

// Custom comparison function for sorting in descending order


        
        	
        

    }
}

				
                            }}
      
      
						
    }
    
    
    

     ?>
  	<meta charset="utf-8">
  	<title>
	<?php
       if (count($arows) > 0) {
              if($lang == "ar"){
    	echo ' حول من '.$arurlfrom.' الي '.$arurlto;	
    }else{
							echo 'Exchange '.$arurlfrom.' To '.$arurlto;
                             }
        }else{
            echo 'ushange.com';
             
        }

					
								
								
	?>
	
	</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="description" content="ushange exchanger monitor automatically monitors the rates from the best automatic crypto, fiat and e-currencies exchange websites">
<meta name="keywords" content="digital currency, aggregator, e-currency exchange, exchanger monitor, e-money exchange, best rates, exchange rates, list of exchangers">
 
 <meta name="viewport" content="width=960" />
<link href="style.css"  rel="stylesheet" type="text/css">
<link href="flags.css"  rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/png" href="./favicon.jpg"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-179295571-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-179295571-1');
</script>

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
	 <div class="whitebottom "><div class="alltopsearch"> 
       
     
 <div class="logo logoheader">
		<a class="a" href="./"><span class="lnname">ushange v2.1</span><br>
       <span class="upp">
           
         
           <?php
                $bb = array("btc", "pmusd", "bch", "eth", "ltc", "xrp", "doge", "xmr", "dash", "zec", "usdtomni", "usdttrc20", "usdterc20", "usdtbep20", "usdc", "tusd", "trx", "xlm", "wmz", "wme", "wmk", "wmx", "paymer", "pmeur", "pmbtc", "pmv", "ppusd", "ppeur", "pprub", "ppgbp", "advcusd", "advceur", "advcrub", "advcuah", "advckzt", "advctry", "qwrub", "qwkzt", "prusd", "preur", "prrub", "sklusd", "skleur", "ntlrusd", "ntlreur", "nixusd", "nixeur");
  
$new_array = array();

for ($i = 0; $i < count($bb); $i++) {
  for ($j = 0; $j < count($bb); $j++) {
    if ($i != $j) {
      $new_array[] = $bb[$i] . '_' . $bb[$j];
    }
  }
}   
           $count = count($new_array);
           echo 'exchange directions  '.$count;
           ?>
           
           <br> 
        
             <?php 
           

      $path = "xmlfiles/"; // replace with the actual folder path
$pattern = $path . "/*.xml";
$xml_files = glob($pattern);

$num_xml_files = 0;
foreach ($xml_files as $file) {
  if (is_file($file)) {
    $num_xml_files++;
  }
}
           echo 'exchangers  '.$num_xml_files;
           ?>
            
            </span>
     </a></div>

			<form class="searche" method="POST" action="searchdirection.php"><input class="inputstyle" type="text" name="keyword" value="" size="50" maxlength="50" placeholder=
			
			
			
			<?php
			

           
    if (count($arows) > 0) {
         echo $tabledirection;    	
        }else{
            echo 'FROMUSD_TOEUR';
        }
    
    
                                                         
    
							                                                                 
                                                                                    
                                                                                    
                                                                                    
             					
								
	?>
			
			>
			<input name="Submit" type="submit" class="bn_blue" value="Search"></form></div></div>


				<ul class="rest">
					<li class="nav">   <a href="./" class="btn10 exchange" >Exchange</a> </li>
						
						<span> | </span>
					<li class="nav">   <a href="./contact" class="btn10 " >Contact</a> </li>


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


	<div class="tablerapp">
<div class="allleft" >

<form class="directionform" method="POST" action="direction.php">
<div class="black_big">From:</div>
<div>
<select name="directionin"  >
<option class="directionin" value="" ></option>
<option class="directionin" value="BTC"  <?php if ($preurlfrom == 'BTC') echo ' selected="selected"'; ?>>
Bitcoin
</option>

<option class="directionin" value="BCH"  <?php if ($preurlfrom == 'BCH') echo ' selected="selected"'; ?>>
Bitcoin Cash
</option>
<option class="directionin" value="ETH"  <?php if ($preurlfrom == 'ETH') echo ' selected="selected"'; ?>>
Ethereum
</option>
<option class="directionin" value="LTC"  <?php if ($preurlfrom == 'LTC') echo ' selected="selected"'; ?>>
Litcoin
</option>
<option class="directionin" value="XRP" <?php if ($preurlfrom == 'XRP') echo ' selected="selected"'; ?>>
Ripple
</option>
<option class="directionin" value="XMR" <?php if ($preurlfrom == 'XMR') echo ' selected="selected"'; ?>>
Monero
</option>
<option class="directionin" value="DOGE" <?php if ($preurlfrom == 'DOGE') echo ' selected="selected"'; ?>>
Dogecoin
</option>
<option class="directionin" value="DASH" <?php if ($preurlfrom == 'DASH') echo ' selected="selected"'; ?>>
Dash
</option>
<option class="directionin" value="ZEC" <?php if ($preurlfrom == 'ZEC') echo ' selected="selected"'; ?>>
Zcash
</option>
<option class="directionin" value="USDTOMNI" <?php if ($preurlfrom == 'USDTOMNI') echo ' selected="selected"'; ?>>
Tether Omni
</option>
<option class="directionin" value="USDTERC20" <?php if ($preurlfrom == 'USDTERC20') echo ' selected="selected"'; ?>>
Tether ERC20
</option>
<option class="directionin" value="USDTTRC20" <?php if ($preurlfrom == 'USDTTRC20') echo ' selected="selected"'; ?>>
Tether TRC20
</option>
<option class="directionin" value="USDTBEP20" <?php if ($preurlfrom == 'USDTBEP20') echo ' selected="selected"'; ?>>
Tether BEP20
</option>
<option class="directionin" value="USDC"  <?php if ($preurlfrom == 'USDC') echo ' selected="selected"'; ?>>
USD Coin
</option>
<option class="directionin" value="TUSD"  <?php if ($preurlfrom == 'TUSD') echo ' selected="selected"'; ?>>
TrueUSD
</option>
<option class="directionin" value="TRX"  <?php if ($preurlfrom == 'TRX') echo ' selected="selected"'; ?>>
Tron
</option>
<option class="directionin" value="XLM"  <?php if ($preurlfrom == 'XLM') echo ' selected="selected"'; ?>>
Stellar
</option>
<option class="directionin" value="WMZ" <?php if ($preurlfrom == 'WMZ') echo ' selected="selected"'; ?>>
WMZ
</option>
<option class="directionin" value="WME" <?php if ($preurlfrom == 'WME') echo ' selected="selected"'; ?>>
WME
</option>
<option class="directionin" value="WMK" <?php if ($preurlfrom == 'WMK') echo ' selected="selected"'; ?>>
WMK
</option>
<option class="directionin" value="WMX" <?php if ($preurlfrom == 'WMX') echo ' selected="selected"'; ?>>
WMX
</option>
<option class="directionin" value="Paymer" <?php if ($preurlfrom == 'Paymer') echo ' selected="selected"'; ?>>
Paymer
</option>
<option class="directionin" value="PMUSD"  <?php if ($preurlfrom == 'PMUSD') echo ' selected="selected"'; ?>>
Perfect Money USD
</option>
<option class="directionin" value="PMEUR"<?php if ($preurlfrom == 'PMEUR') echo ' selected="selected"'; ?>>
Perfect Money EUR
</option>
<option class="directionin" value="PMBTC" <?php if ($preurlfrom == 'PMBTC') echo ' selected="selected"'; ?>>
Perfect Money BTC
</option>
<option class="directionin" value="PMV"<?php if ($preurlfrom == 'PMV') echo ' selected="selected"'; ?>> 
Perfect e-Voucher USD
</option>
<option class="directionin" value="PPUSD" <?php if ($preurlfrom == 'PPUSD') echo ' selected="selected"'; ?>> 
Paypal USD
</option>
<option class="directionin" value="PPEUR" <?php if ($preurlfrom == 'PPEUR') echo ' selected="selected"'; ?>> 
Paypal EUR
</option>
<option class="directionin" value="PPRUB" <?php if ($preurlfrom == 'PPRUB') echo ' selected="selected"'; ?>> 
Paypal RUB
</option>
<option class="directionin" value="PPGBP" <?php if ($preurlfrom == 'PPGBP') echo ' selected="selected"'; ?>> 
Paypal GBP
</option>
<option class="directionin" value="ADVCUSD" <?php if ($preurlfrom == 'ADVCUSD') echo ' selected="selected"'; ?>> 
Advanced Cash USD
</option>
<option class="directionin" value="ADVCEUR"<?php if ($preurlfrom == 'ADVCEUR') echo ' selected="selected"'; ?>>  
Advanced Cash EUR
</option>
<option class="directionin" value="ADVCRUB" <?php if ($preurlfrom == 'ADVCRUB') echo ' selected="selected"'; ?>> 
Advanced Cash RUB
</option>
<option class="directionin" value="ADVCUAH" <?php if ($preurlfrom == 'ADVCUAH') echo ' selected="selected"'; ?>> 
Advanced Cash UAH
</option>
<option class="directionin" value="ADVCKZT" <?php if ($preurlfrom == 'ADVCKZT') echo ' selected="selected"'; ?>> 
Advanced Cash KZT
</option>
<option class="directionin" value="ADVCTRY" <?php if ($preurlfrom == 'ADVCTRY') echo ' selected="selected"'; ?>> 
Advanced Cash TRY
</option>
<option class="directionin" value="QWRUB" <?php if ($preurlfrom == 'QWRUB') echo ' selected="selected"'; ?>> 
Qiwi RUB
</option>
<option class="directionin" value="QWKZT" <?php if ($preurlfrom == 'QWKZT') echo ' selected="selected"'; ?>> 
Qiwi KZT
</option>
<option class="directionin" value="PRUSD" <?php if ($preurlfrom == 'PRUSD') echo ' selected="selected"'; ?>> 
Payeer USD
</option>
<option class="directionin" value="PREUR" <?php if ($preurlfrom == 'PREUR') echo ' selected="selected"'; ?>> 
Payeer EUR
</option>
<option class="directionin" value="PRRUB" <?php if ($preurlfrom == 'PRRUB') echo ' selected="selected"'; ?>> 
Payeer RUB
</option>
<option class="directionin" value="SKLUSD" <?php if ($preurlfrom == 'SKLUSD') echo ' selected="selected"'; ?>> 
Skrill USD
</option>
<option class="directionin" value="SKLEUR" <?php if ($preurlfrom == 'SKLEUR') echo ' selected="selected"'; ?>> 
Skrill EUR
</option>
<option class="directionin" value="NTLRUSD" <?php if ($preurlfrom == 'NTLRUSD') echo ' selected="selected"'; ?>> 
Neteller USD
</option>
<option class="directionin" value="NTLREUR" <?php if ($preurlfrom == 'NTLREUR') echo ' selected="selected"'; ?>> 
Neteller EUR
</option>
<option class="directionin" value="NIXUSD" <?php if ($preurlfrom == 'NIXUSD') echo ' selected="selected"'; ?>> 
NixMoney USD
</option>
<option class="directionin" value="NIXEUR" <?php if ($preurlfrom == 'NIXEUR') echo ' selected="selected"'; ?>> 
NixMoney EUR
</option>









</select>
</div>
<div class="black_big">To:</div>
<div>
<select name="directionto" >

<option class="directionto" value="" ></option>


<option class="directionin" value="BTC"  <?php if ($preurlto == 'BTC') echo ' selected="selected"'; ?>>
Bitcoin
</option>

<option class="directionin" value="BCH"  <?php if ($preurlto == 'BCH') echo ' selected="selected"'; ?>>
Bitcoin Cash
</option>
<option class="directionin" value="ETH"  <?php if ($preurlto == 'ETH') echo ' selected="selected"'; ?>>
Ethereum
</option>
<option class="directionin" value="LTC"  <?php if ($preurlto == 'LTC') echo ' selected="selected"'; ?>>
Litcoin
</option>
<option class="directionin" value="XRP" <?php if ($preurlto == 'XRP') echo ' selected="selected"'; ?>>
Ripple
</option>
<option class="directionin" value="XMR" <?php if ($preurlto == 'XMR') echo ' selected="selected"'; ?>>
Monero
</option>
<option class="directionin" value="DOGE" <?php if ($preurlto == 'DOGE') echo ' selected="selected"'; ?>>
Dogecoin
</option>
<option class="directionin" value="DASH" <?php if ($preurlto == 'DASH') echo ' selected="selected"'; ?>>
Dash
</option>
<option class="directionin" value="ZEC" <?php if ($preurlto == 'ZEC') echo ' selected="selected"'; ?>>
Zcash
</option>
<option class="directionin" value="USDTOMNI" <?php if ($preurlto == 'USDTOMNI') echo ' selected="selected"'; ?>>
Tether Omni
</option>
<option class="directionin" value="USDTERC20" <?php if ($preurlto == 'USDTERC20') echo ' selected="selected"'; ?>>
Tether ERC20
</option>
<option class="directionin" value="USDTTRC20" <?php if ($preurlto == 'USDTTRC20') echo ' selected="selected"'; ?>>
Tether TRC20
</option>
<option class="directionin" value="USDTBEP20" <?php if ($preurlto == 'USDTBEP20') echo ' selected="selected"'; ?>>
Tether BEP20
</option>
<option class="directionin" value="USDC"  <?php if ($preurlto == 'USDC') echo ' selected="selected"'; ?>>
USD Coin
</option>
<option class="directionin" value="TUSD"  <?php if ($preurlto == 'TUSD') echo ' selected="selected"'; ?>>
TrueUSD
</option>
<option class="directionin" value="TRX"  <?php if ($preurlto == 'TRX') echo ' selected="selected"'; ?>>
Tron
</option>
<option class="directionin" value="XLM"  <?php if ($preurlto == 'XLM') echo ' selected="selected"'; ?>>
Stellar
</option>
<option class="directionin" value="WMZ" <?php if ($preurlto == 'WMZ') echo ' selected="selected"'; ?>>
WMZ
</option>
<option class="directionin" value="WME" <?php if ($preurlto == 'WME') echo ' selected="selected"'; ?>>
WME
</option>
<option class="directionin" value="WMK" <?php if ($preurlto == 'WMK') echo ' selected="selected"'; ?>>
WMK
</option>
<option class="directionin" value="WMX" <?php if ($preurlto == 'WMX') echo ' selected="selected"'; ?>>
WMX
</option>
<option class="directionin" value="Paymer" <?php if ($preurlto == 'Paymer') echo ' selected="selected"'; ?>>
Paymer
</option>
<option class="directionin" value="PMUSD"  <?php if ($preurlto == 'PMUSD') echo ' selected="selected"'; ?>>
Perfect Money USD
</option>
<option class="directionin" value="PMEUR"<?php if ($preurlto == 'PMEUR') echo ' selected="selected"'; ?>>
Perfect Money EUR
</option>
<option class="directionin" value="PMBTC" <?php if ($preurlto == 'PMBTC') echo ' selected="selected"'; ?>>
Perfect Money BTC
</option>
<option class="directionin" value="PMV"<?php if ($preurlto == 'PMV') echo ' selected="selected"'; ?>> 
Perfect e-Voucher USD
</option>
<option class="directionin" value="PPUSD" <?php if ($preurlto == 'PPUSD') echo ' selected="selected"'; ?>> 
Paypal USD
</option>
<option class="directionin" value="PPEUR" <?php if ($preurlto == 'PPEUR') echo ' selected="selected"'; ?>> 
Paypal EUR
</option>
<option class="directionin" value="PPRUB" <?php if ($preurlto == 'PPRUB') echo ' selected="selected"'; ?>> 
Paypal RUB
</option>
<option class="directionin" value="PPGBP" <?php if ($preurlto == 'PPGBP') echo ' selected="selected"'; ?>> 
Paypal GBP
</option>
<option class="directionin" value="ADVCUSD" <?php if ($preurlto == 'ADVCUSD') echo ' selected="selected"'; ?>> 
Advanced Cash USD
</option>
<option class="directionin" value="ADVCEUR"<?php if ($preurlto == 'ADVCEUR') echo ' selected="selected"'; ?>>  
Advanced Cash EUR
</option>
<option class="directionin" value="ADVCRUB" <?php if ($preurlto == 'ADVCRUB') echo ' selected="selected"'; ?>> 
Advanced Cash RUB
</option>
<option class="directionin" value="ADVCUAH" <?php if ($preurlto == 'ADVCUAH') echo ' selected="selected"'; ?>> 
Advanced Cash UAH
</option>
<option class="directionin" value="ADVCKZT" <?php if ($preurlto == 'ADVCKZT') echo ' selected="selected"'; ?>> 
Advanced Cash KZT
</option>
<option class="directionin" value="ADVCTRY" <?php if ($preurlto == 'ADVCTRY') echo ' selected="selected"'; ?>> 
Advanced Cash TRY
</option>
<option class="directionin" value="QWRUB" <?php if ($preurlto == 'QWRUB') echo ' selected="selected"'; ?>> 
Qiwi RUB
</option>
<option class="directionin" value="QWKZT" <?php if ($preurlto == 'QWKZT') echo ' selected="selected"'; ?>> 
Qiwi KZT
</option>
<option class="directionin" value="PRUSD" <?php if ($preurlto == 'PRUSD') echo ' selected="selected"'; ?>> 
Payeer USD
</option>
<option class="directionin" value="PREUR" <?php if ($preurlto == 'PREUR') echo ' selected="selected"'; ?>> 
Payeer EUR
</option>
<option class="directionin" value="PRRUB" <?php if ($preurlto == 'PRRUB') echo ' selected="selected"'; ?>> 
Payeer RUB
</option>
<option class="directionin" value="SKLUSD" <?php if ($preurlto == 'SKLUSD') echo ' selected="selected"'; ?>> 
Skrill USD
</option>
<option class="directionin" value="SKLEUR" <?php if ($preurlto == 'SKLEUR') echo ' selected="selected"'; ?>> 
Skrill EUR
</option>
<option class="directionin" value="NTLRUSD" <?php if ($preurlto == 'NTLRUSD') echo ' selected="selected"'; ?>> 
Neteller USD
</option>
<option class="directionin" value="NTLREUR" <?php if ($preurlto == 'NTLREUR') echo ' selected="selected"'; ?>> 
Neteller EUR
</option>
<option class="directionin" value="NIXUSD" <?php if ($preurlto == 'NIXUSD') echo ' selected="selected"'; ?>> 
NixMoney USD
</option>
<option class="directionin" value="NIXEUR" <?php if ($preurlto == 'NIXEUR') echo ' selected="selected"'; ?>> 
NixMoney EUR
</option>









</select>

</div>

<button  class="directionsubmit">Exchange</button>
</form>


<div class="sbox" >


<div class="leftlabel" ><span class="fpart">CryptoCurrency</span><span class="spart"> Wallets</span></div>


<div class="ulogoo" >






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
$id=  0;
						$sql = "SELECT wallet, reflink, showing FROM lastadded";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							echo "<table id='ratesor'>";
							// output data of each row
							while($row = $result->fetch_assoc()) {
						
					
						
						
						
								echo "<tr><td ><a class='programname' target='_blank'href='".$row["reflink"]."'>".$row["wallet"]." </a><br><span class='added'>".$row["showing"]."</span></td></tr>";
							
							}
							echo "</table>";
						} else {
							
						}

					
						?>



























</div>




    


</div>
 
</div>



    
<div class="ratesrapp">
		
	<div class="calcamount"><input class="amount indexa" >
	   <button class="indexa indexamount1"type="submit" name="check"><span>Calculate</span> </button></div>
		
		
			
						<?php
						
						

						$nnumber = 0;

    
    
    
    

      

  
		
      
      
      if (count($arows) > 0) {
          	echo '<div class="allexchanges"> Exchange From '.$urlfrom. ' To '.$urlto.'</div>';	
					
							
						
		echo "<table id='rates'><tr><th class='numbers'>#</th><th class='exchangername'>Exchanger</th><th>From</th><th>To</th><th>Reserve</th><th>Mode</th><th class='minamount'>minimum</th></tr>";
							// output data of each row
			
      	
 function compare_rows($row1, $row2) {
    // parse the $get2 values from each row
    preg_match('/<span class=\'gett\'>(.*?)<\/span>/', $row1, $matches1);
    preg_match('/<span class=\'gett\'>(.*?)<\/span>/', $row2, $matches2);
    $get2_1 = $matches1[1];
    $get2_2 = $matches2[1];

    // compare the $get2 values and return the appropriate result
    if ($get2_1 == $get2_2) {
        return 0;
    } elseif ($get2_1 < $get2_2) {
        return 1;
    } else {
        return -1;
    }
}

// sort the $arows array using the custom comparison function
usort($arows, 'compare_rows');

// output the sorted rows
foreach ($arows as $row) {
    echo $row;
}
            echo "</table>";
}else{
           	
					
							echo '<div class="allexchanges">Popular Exchange Rates</div>';	
						echo "<table id='rates'><tr><th class='numbers'>#</th><th class='exchangername'>Exchanger</th><th>From</th><th>To</th><th>Reserve</th><th>Mode</th><th class='minamount'>minimum</th></tr>";
								$nnumber = 0;
								$class = 0;	
                       
						  $file_name = 'popularrates.xml';
                                $xml = simplexml_load_file($file_name);
                                foreach ($xml->item as $item) {
                                  $preflink = $item->reflink;
								  $pname = $item->name;
                                 $pin = $item->in;
								$pout = $item->out;
                                 $pfrom = $item->from;
								 $pto = $item->to;
                                     $pmode = $item->mode;
                                    $pminamount = $item->minamount;
                                      $pamount = $item->amount;
                                    $class = $class +1;
									$nnumber = $nnumber +1;
                                    
                                echo "<tr><td class='hash'><a  target='_blank'> <span class='hash".$class. "'>". $nnumber.".</span> </a></td><td class='exchangername label'><a  href=". $preflink." target='_blank' style=' text-decoration:underline; color:#CC3300; text-shadow: 0 0 1px #fff;' ><span>" . $pname. "</span></a></td><td class='give'><a  target='_blank'> <span class='send".$class."'>". $pin."</span> <span class=' labelfont from'>". $pfrom. "</span></a></td><td  class='get'><a    target='_blank'><span class='gett".$class."'>". $pout." </span><span class='labelfont from'>". $pto. "</span></a></td><td ><a  target='_blank'>" . $pamount."</a></td><td class='modetd'><a  target='_blank'>" . $pmode. "</a></td><td class='minamount'><a  target='_blank'>" . $pminamount . "</a></td></tr>";    
                                    
                                    
                                }
	
          	
	
    	   		echo "</table>"; 
            
        }				
						
						
						
							
						
						
						
	







    
    
    
    
    
    
    
    
    
    
    
    
						?>

	













 <?php
        $count_file = './myapp/visitor_counts/'.$from_to_escaped.'_visitor_count.txt';
    $visits = file_get_contents($count_file);
        if (file_exists($count_file)) {
            $count = file_get_contents($count_file);
            echo "<div class='white'>";
          
 

            echo $count;
             echo "<span> views</span>";
            echo "</div>";
        } else {
          
        }

    
    ?>


</div>


       
   
     
     

    
   

</div>


<div class="bfooter" >
<?php
// Replace with your database details
 
    
               
   


// Output tables as HTML
$tables = $new_array;

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
				
					<li class="nav ">  <a href="./contact" class="btn10 rightbtn" >Contact</a></li>
				

</ul></div></div>
</body>

<?php   ?>
</html>

