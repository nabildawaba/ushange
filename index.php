<?php   session_start();
exec('python3 myapp/app.py');
	if ( $_SERVER['REQUEST_URI'] != strtolower ( $_SERVER['REQUEST_URI'] ) )
    header ('Location: //' . $_SERVER['HTTP_HOST'] . strtolower ( $_SERVER['REQUEST_URI'] ));

    $lang = $_GET['lang'];	
  
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
	$from_to = $_GET['title'];
	/*
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


*/
 

			
		

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

$a=array("Bank Account USD"=>"WIREUSD","Bank Account EUR"=>"WIREEUR","MoneyGram USD"=>"MGUSD","MoneyGram EUR"=>"MGEUR","Western Union USD"=>"WUUSD","Western Union EUR"=>"WUEUR","Bitcoin"=>"BTC","Perfect Money USD"=>"PMUSD","Bitcoin Cash"=>"BCH","Ethereum"=>"ETH","Litcoin"=>"LTC","Ripple"=>"XRP","Dogecoin"=>"DOGE",
	"Monero"=>"XMR","Dash"=>"DASH","Zcash"=>"ZEC","Tether Omni"=>"USDTOMNI","Tether TRC20"=>"USDTTRC20","Tether ERC20"=>"USDTERC20","Tether BEP20"=>"USDTBEP20","Tether SOL"=>"USDTSOL","Tether POLYGON"=>"USDTPOLYGON"
	,"USDCoin ERC20"=>"USDCERC20","USDCoin TRC20"=>"USDCTRC20","USDCoin BEP20"=>"USDCBEP20","USDCoin SOL"=>"USDCSOL","USDCoin POLYGON"=>"USDCPOLYGON","TrueUSD TRC20"=>"TUSDTRC20","TrueUSD ERC20"=>"TUSDERC20","Tron"=>"TRX","Stellar"=>"XLM","Webmoney WMZ"=>"WMZ","Webmoney WME"=>"WME","Webmoney WMK"=>"WMK"
	,"Webmoney WMX"=>"WMX","Paymer"=>"Paymer","Perfect Money EUR"=>"PMEUR","Perfect Money BTC"=>"PMBTC","Perfect e-Voucher USD"=>"PMV"
	,"Paypal USD"=>"PPUSD","Paypal EUR"=>"PPEUR","Paypal RUB"=>"PPRUB","Paypal GBP"=>"PPGBP","Advanced Cash USD"=>"ADVCUSD","Advanced Cash EUR"=>"ADVCEUR"
	,"Advanced Cash RUB"=>"ADVCRUB","Advanced Cash UAH"=>"ADVCUAH","Advanced Cash KZT"=>"ADVCKZT","Advanced Cash TRY"=>"ADVCTRY","Qiwi RUB"=>"QWRUB"
	,"Qiwi KZT"=>"QWKZT","Payeer USD"=>"PRUSD","Payeer EUR"=>"PREUR","Payeer RUB"=>"PRRUB","Skrill USD"=>"SKLUSD","Skrill EUR"=>"SKLEUR"
	,"Neteller USD"=>"NTLRUSD","Neteller EUR"=>"NTLREUR","Nixmoney USD"=>"NIXUSD","Nixmoney EUR"=>"NIXEUR");
$arabicnames=array("تحويل بنكي يورو"=>"WIREEUR","تحويل بنكي"=>"WIREUSD","موني جرام يورو"=>"MGEUR","موني جرام"=>"MGUSD","ويسترن يونيون"=>"WUUSD","ويسترن يونيون يورو"=>"WUEUR","بيتكوين"=>"BTC","بيرفكت موني"=>"PMUSD","بيتكوين كاش"=>"BCH","ايثيريوم"=>"ETH","ليتكوين"=>"LTC","ربل"=>"XRP","دوجي كوين"=>"DOGE",
	"مونيرو"=>"XMR","داش"=>"DASH","ذ كاش"=>"ZEC","تيثر اومني"=>"USDTOMNI","تيثر ترون "=>"USDTTRC20","تيثر ايثريوم"=>"USDTERC20","تيثر بينانس"=>"USDTBEP20","تيثر سول"=>"USDTSOL","تيثر بوليحون"=>"USDTPOLYGON"
	,"عملةالدولارايثريوم"=>"USDCERC20","عملةالدولار ايثريوم"=>"USDCTRC20","عملةالدولار بينانس"=>"USDCBEP20","عملةالدولار سول"=>"USDCSOL","عملةالدولاربولي"=>"USDCPOLYGON","ترو دولار ترون"=>"TUSDTRC20","ترو دولار ايثريوم"=>"TUSDERC20","ترون"=>"TRX","ستيلار"=>"XLM","ويب موني"=>"WMZ","ويب موني يورو"=>"WME","ويب موني تينغ"=>"WMK"
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
	       $bb = array("wireusd", "wireeur", "mgusd", "mgeur", "wuusd", "wueur","btc", "pmusd", "bch", "eth", "ltc", "xrp", "doge", "xmr", "dash", "zec", "usdtomni",
"usdttrc20","usdterc20","usdtbep20","usdtsol","usdtpolygon","usdcerc20","usdctrc20","usdcbep20","usdcsol","usdcpolygon","tusdtrc20","tusderc20", "trx", "xlm", "wmz", "wme", "wmk", "wmx", "paymer", "pmeur", "pmbtc", "pmv", "ppusd", "ppeur", "pprub", "ppgbp", "advcusd", "advceur", "advcrub", "advcuah", "advckzt", "advctry", "qwrub", "qwkzt", "prusd", "preur", "prrub", "sklusd", "skleur", "ntlrusd", "ntlreur", "nixusd", "nixeur");


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
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-1JV0WPP9YL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1JV0WPP9YL');
</script>
     <!-- Google tag (gtag.js) -->

	<?php
									

			
						if (in_array($smalltabledirection, $new_array)) {
  // do something

     
			$arows = array(); // initialize empty array

$xml_file = 'exchangername.xml';
$xml = simplexml_load_file($xml_file);

foreach ($xml->record as $record) {
    $url = (string)$record->XML;
    $fname = (string)$record->Name;
    $reflink = (string)$record->reflink;
    $mode = (string)$record->Mode;
    $file_name = 'xmlfiles/'.$fname.'.xml';
    $xml_data = simplexml_load_file($file_name);
    foreach ($xml_data->item as $item) {
        // Check if the <from> and <to> values match your criteria
        if ($item->from == $preurlfrom && $item->to == $preurlto) {
            // If they match, retrieve other values in the <item> section
            $class = $class +1;
            $nnumber = $nnumber +1;
            $give = $item->in;
            $get = $item->out;
            $yousend = 1.00;
            $from = $item->from;

            if($from == 'Bitcoin'){
                $from = str_replace("Bitcoin","BTC",$from);
            }
            $to= $item->to;
            if($to == 'Bitcoin'){
                $to = str_replace("Bitcoin","BTC",$to);
            }

            $minamount= $item->minamount;
            $minamount = (float) preg_replace('/[^0-9.]/', '', $minamount);
            $minamount = number_format($minamount, 4);
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
            if($mode == 'Automatic'){
                $mode='ATM';
            }else{
                $mode='MNL';
            }
										
 $new_row = "<td class='exchangername label'><a  href='".$reflink."' target='_blank' style=' text-decoration:underline; color:#CC3300; text-shadow: 0 0 1px #fff;' ><span>".$fname."</span></a></td><td class='give'><a  target='_blank'> <span class='send'>". $yousend."</span> <span class=' labelfont from'>". $from. "</span></a></td><td  class='get'><a    target='_blank'><span class='gett'>". $get2." </span><span class='labelfont from'>". $to. "</span></a></td><td ><a  target='_blank'>" . $reserve1."</a></td><td class='modetd'><a  target='_blank'>" . $mode. "</a></td><td class='minamount'><a  target='_blank'>" . $minamount. "</a></td></tr>";
    
  
        
    // add new element to end of $rows array
    $arows[] = $new_row;
// Example array of <tr> elements with values

// Custom comparison function for sorting in descending order
 

        
        	
        

    }
}

				
                            }}
      
      
						
    
    
    

     ?>
  	<meta charset="utf-8">
  	<title>
	<?php
       if (count($arows) > 0) {
              if($lang == "ar"){
    	echo ' حول من '.$arurlfrom.' الي '.$arurlto;	
    }else if($lang == "ru"){
    	echo 'Обмен '.$arurlfrom.' на '.$arurlto;	
    }else {
							echo 'Exchange '.$arurlfrom.' To '.$arurlto;
                             }
        }else{
            echo 'ushange.com';
             
        }

					
								
								
	?>
	
	</title>
     <meta name="yandex-verification" content="037be31838e8c25e" />

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="description" content="ushange exchanger monitor automatically monitors the rates from the best automatic crypto, fiat and e-currencies exchange websites">
<meta name="keywords" content="Bitcoin, exchange, auto, paypal, perfect money, payeer, skrill, cryptocurrency, western union, bank account, egypt">
 <?php   
        
     
      if($lang == "ar"){
         echo ' <meta name="keywords" content="تحويل عملات , بيرفكت موني , باي بال , بيتكوين , سكريل , تحويل اوتوماتيك , رقمية , ويسترن يونيون , تحويل بنكي مصري ">';
    echo '<meta name="description" content="نحن نعرض بشكل اوتوماتيكي التحويلات الافضل للعملات الرقمية والعملات الالكترونية من المواقع المتخصصة في التحويلات حول العالم">';	
          
           if (count($arows) > 0) {
           echo '<link rel="canonical" href="https://ushange.com/'.$tabledirection.'" />';	 	
        }else{
             echo '<link rel="canonical" href="https://ushange.com" />';	
        }
        
           

    }else if($lang == "ru"){
           if (count($arows) > 0) {
           echo '<link rel="canonical" href="https://ushange.com/'.$tabledirection.'" />';	 	
        }else{
             echo '<link rel="canonical" href="https://ushange.com" />';	
        }
            echo ' <meta name="keywords" content="мониторинг, лучшие курсы, мониторинг обменников, курсы обмена, валюта, выгодный обмен, все обменники, обменные пункты, обменник, обмен валют, список обменников">';
echo '<meta name="description" content="Мониторинг обменников ushange предлагает самую актуальную информацию о курсах многих лучших автоматических и ручных обменных пунктов Рунета. С нашей помощью вы без труда найдете лучшие курсы">';
      }
     else{
         echo '  <meta name="keywords" content="Bitcoin, exchange, auto, paypal, perfect money, payeer, skrill, cryptocurrency, western union, bank account, egypt">';
echo '<meta name="description" content="ushange exchanger monitor automatically monitors the rates from the best automatic crypto, fiat and e-currencies exchange websites">';
   if (count($arows) > 0) {
           echo '<link rel="canonical" href="https://ushange.com/'.$tabledirection.'" />';	 	
        }else{
             echo '<link rel="canonical" href="https://ushange.com" />';	
        }	
                             }
     ?>
     
     

 <meta name="viewport" content="width=960" />
<link href="style.css"  rel="stylesheet" type="text/css">
<link href="flags.css"  rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/png" href="data:image/jpeg;base64,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7hyxdw5Yu4LZfgEXuLhx9zh7F6lt/BHsXr70HwMTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYTlYe9Z8T/AIf/xAAnEAABAwQCAQMFAQAAAAAAAAAAAVHwESAw8cHRMSFBoRBAUGGAkf/aAAgBAQABPyH+V0FyDVFT0VKBKMf/AAivBFeCK8EV4IrwIdvgmqLV6+MdOAn02q6oRXgivBFeCK8EV4IrwU0ISNL0+yZJVgl0e/HIPfBNySrBLo9+OQe+CbklWCXR78cg98E3JKsEuj345B74JuSVYJdHvxyD3wTckqwS6PfjkHvgm5JVgl0e/HIPfBNySrBLo9+OQe+CbklWCXR78cg98E3JKsEuj345B74JuSVYJdHvxyD3wTckqwS6PfjkHvgm5JVgl0e/HIPfBNySrBLo9+OQe+CbklWCXR78cg98E3JKsEuj345B74JuSVYJdHvxyD3wTckqwS6PfjkHvgm5JVgl0e/HJPfBNyTrBFRyqOVR7K1RT1XnG1m1m1m1m1m1m1m1m1m1ivI8SpT3sqjlUcqjkE36p2kFaqRlIykZSMpGUjKRlIykZSMpGUjKKkT4RZRGKIxRGKIxRGKIxRGKIxRGKI1iqSItJFUjKRlIyi9WFK1T6/K5Yf6fcNL5XLD/AE+44XyuXz9XLT7Ef0RfRF9EX0RfRF9EX0RfRF9EX0RfRF9EX0RfRF9EX0LJR+8KfF4vlfwovCg08VNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJNJPCg08U/D/wD/2gAMAwEAAgADAAAAEAggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggrTDCwQgggoDDAwggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAggggglfPAgwgggg/PAAgggggkcPBDjjjjgfMCAhvPPPPP7PDDDDDPBvfAlPfffffbjTTTTTTVv8A8JBLLLLLLLLLLLLLLLLMIIIIIIIIIIIIIIIIIIIL/8QAIREAAQQCAgMBAQAAAAAAAAAAAQAQIDERoWGxIUBRMGD/2gAIAQMBAT8Q/kTZ+Vl9WX1EgM5kYWVrL6svqtk6ONFGOg/dOjjRRjoP2To40UY6D9k6ONFGOg/ZOjjRRjoP2To40UY6D9k6ONFGOg/ZOjjRRjoP2To40UY6D9k6ONFELCwsLC0n7GDJxOqAcCPwHJMBAyGqmEAlcq5VyrlXKuVcqJB8wiwc+jVVVVVADA9X/8QAKREAAQEHBQABBAMAAAAAAAAAAQAQIFFhkdHwESExobFBMHGBwUBg8f/aAAgBAgEBPxD+okjbvzpxpdTlFlOUWWuFuQOR8/hA6jV0jTJMjXUb6fhTlFlOUWRGboLVrrwQP2/1fQb3x6uJ3LRbgovur6De+PVxO4aLcFF91fQb3x6uJ3DRbgovur6De+PVxO4aLcFF91fQb3x6uJ3DRbgovur6De+PVxO4aLcFF91fQb3x6uJ3DRbgovur6De+PVxO4aLcFF91fQb3x6uJ3LRbgovur6De2PVpWxSSklJKSRAnGRbioscxwBU4UU4UU4UU4UR5hFAvt0CNzon6Bg3I9AhLoF8Q9IM6hf1aJHbcXWYi6zEXWYi6zEXWYi6zEXWYi627gIJ3Efugub7H9M5WiNFMFTZTBU2UwVNlMFTZTBU2UwVNlMFTZTBU2UwVNlMFTZTBU2UwVNlMFTZTBU2UwVNlMFTZalRpppt/n8X/xAApEAACAAQFBQACAwEAAAAAAAAAASEwMfARIFFxwRBhkdHxQEFQobGA/9oACAEBAAE/EP8AjJYYdIECBAgQl79IECBCdilKHMIaadUzAMc17cuXLtqc9uExI1jTTjipbUGeeCJgsQ8FoRM27cuXLhufIOgbG0hJYuM2JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmebLoFTI592JQtsqmWbvoF+sjn3cmAUFNTsPJ2HkTTo0+iEQDYhJKLZW5wW5wW5wW5wW5wW5wW5wW5wW5wW5wYzt2Kaj9MXRwqdh5Ow8nYeSPB66+KnicIbFp6Fp6Fp6Fp6Fp6Fp6Fp6Fp6Fh6Fh6Fh6Fh6D/0UeLBLD/a7ZOw8HYeDsPB2Hg7Dwdh4Ow8HYeDsPB2HgSSosOiHu20BRRYehYehY+guIVicI79EWHQVPzeP7v8A1Cp1uGnW06CpMwxvwR/Z/wCoVOjoXDTradBUmLdMaMMCwwweh9ePrR9aPrR9aPrR9aPrR9aPrR9aPrR9aPrR9aIvJDR6WR27sKhU6OhcNOiLDoJmJiYmJiYmJiYmJiYogQIECBAgQIECBAgQIECBijEjjUsGnVBSQyNpA6wZc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/Bc/BcvA8pMRmkgVIL+H/AP/Z"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) - Google Analytics -->
<!-- Google tag (gtag.js) -->


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
     U   <div ></div>
	</div>

			<form class="searche" method="POST" action="searchdirection.php">
                     <span class="upp">
           
         
           <?php
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
           $count = count($new_array);
          
                          if($lang == "ru"){
                       echo 'Всего курсов  '.$count;
                    }else {
                        echo 'exchange directions  '.$count;
                    }		
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
          
                          if($lang == "ru"){
                      echo 'Обменников  '.$num_xml_files;
                    }else {
                         echo 'exchangers  '.$num_xml_files;
                    }		
           ?>
            
            </span>
                <input class="inputstyle" type="text" name="keyword" value="" size="50" maxlength="50" placeholder=
			
			
			
			<?php
			

           
    if (count($arows) > 0) {
         echo $tabledirection;    	
        }else{
            echo 'FROMUSD_TOEUR';
        }
    
    
                                                         
    
							                                                                 
                                                                                    
                                                                                    
                                                                                    
             					
								
	?>
			
			>
			<input name="Submit" type="submit" class="bn_blue" value="<?php
                    if($lang == "ru"){
                      echo 'поиск';
                    }else {
                         echo 'Search';
                    }	
                                                                      ?>"></form></div></div>


				<ul class="rest">
					<li class="nav">   <a href="./" class="btn10 exchange" >
                        
                        <?php
                        if($lang == "ru"){
                        echo 'Обмен';	
                    }else {
                        echo 'Exchange';	
                    }
                        ?>
                        </a> </li>
						
						<span> | </span>
					<li class="nav">   <a href="./contact" class="btn10 " >  <?php
                        if($lang == "ru"){
                        echo 'Контакты';	
                    }else {
                        echo 'Contact';	
                    }
                        ?></a> </li>


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
				
					<div class="servertime"> <?php 
                         if($lang == "ru"){
                      echo 'Время сервера: ';
                    }else {
                         echo 'Server Time: ';
                    }	
date_default_timezone_set('Africa/Cairo');
$date = date('m/d/Y h:i:s a', time());
echo date('l', strtotime($date)).', ';
echo date("d").' ';
echo date('F Y', strtotime($date));
echo date(" H:i:s");
?>
<br>
<span> 
<?php 
 if($lang == "ru"){
                      echo 'Последнее обновление: ';
                    }else {
                         echo 'Last Update: ';
                    }		


$file = "datte.txt"; // Path to your text file
$content = file_get_contents($file); // Read the file into a string
echo $content;


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
    

    <select    class="selectbox" name="directionin">
		
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
        <option class="directionin" value="USDTSOL" <?php if ($preurlfrom == 'USDTSOL') echo ' selected="selected"'; ?>>
Tether SOL
</option>
        <option class="directionin" value="USDTPOLYGON" <?php if ($preurlfrom == 'USDTPOLYGON') echo ' selected="selected"'; ?>>
Tether POLYGON
</option>
        

        <option class="directionin" value="USDCERC20" <?php if ($preurlfrom == 'USDCERC20') echo ' selected="selected"'; ?>>
USD Coin ERC20
</option>
<option class="directionin" value="USDCTRC20" <?php if ($preurlfrom == 'USDCTRC20') echo ' selected="selected"'; ?>>
USD Coin TRC20
</option>
<option class="directionin" value="USDCBEP20" <?php if ($preurlfrom == 'USDCBEP20') echo ' selected="selected"'; ?>>
USD Coin BEP20
</option>
        <option class="directionin" value="USDCSOL" <?php if ($preurlfrom == 'USDCSOL') echo ' selected="selected"'; ?>>
USD Coin SOL
</option>
        <option class="directionin" value="USDCPOLYGON" <?php if ($preurlfrom == 'USDCPOLYGON') echo ' selected="selected"'; ?>>
USD Coin POLYGON
</option>
         <option class="directionin" value="TUSDERC20" <?php if ($preurlfrom == 'TUSDERC20') echo ' selected="selected"'; ?>>
TrueUSD ERC20
</option>
<option class="directionin" value="TUSDTRC20" <?php if ($preurlfrom == 'TUSDTRC20') echo ' selected="selected"'; ?>>
TrueUSD TRC20
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
    
  <option class="directionin" value="WUUSD" <?php if ($preurlfrom == 'WUUSD') echo ' selected="selected"'; ?>> 
Western Union USD
</option>
    <option class="directionin" value="WUEUR" <?php if ($preurlfrom == 'WUEUR') echo ' selected="selected"'; ?>> 
Western Union EUR
</option>
    <option class="directionin" value="MGUSD" <?php if ($preurlfrom == 'MGUSD') echo ' selected="selected"'; ?>> 
MoneyGram USD
</option>
    <option class="directionin" value="MGEUR" <?php if ($preurlfrom == 'MGEUR') echo ' selected="selected"'; ?>> 
MoneyGram EUR
</option>
    <option class="directionin" value="WIREUSD" <?php if ($preurlfrom == 'WIREUSD') echo ' selected="selected"'; ?>> 
Bank Transfer USD
</option>
    <option class="directionin" value="WIREEUR" <?php if ($preurlfrom == 'WIREEUR') echo ' selected="selected"'; ?>> 
Bank Transfer EUR
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
    

    <select    class="selectbox" name="directionto">

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
        <option class="directionin" value="USDTSOL" <?php if ($preurlto == 'USDTSOL') echo ' selected="selected"'; ?>>
Tether SOL
</option>
        <option class="directionin" value="USDTPOLYGON" <?php if ($preurlto == 'USDTPOLYGON') echo ' selected="selected"'; ?>>
Tether POLYGON
</option>
        

        <option class="directionin" value="USDCERC20" <?php if ($preurlto == 'USDCERC20') echo ' selected="selected"'; ?>>
USD Coin ERC20
</option>
<option class="directionin" value="USDCTRC20" <?php if ($preurlto == 'USDCTRC20') echo ' selected="selected"'; ?>>
USD Coin TRC20
</option>
<option class="directionin" value="USDCBEP20" <?php if ($preurlto == 'USDCBEP20') echo ' selected="selected"'; ?>>
USD Coin BEP20
</option>
        <option class="directionin" value="USDCSOL" <?php if ($preurlto == 'USDCSOL') echo ' selected="selected"'; ?>>
USD Coin SOL
</option>
        <option class="directionin" value="USDCPOLYGON" <?php if ($preurlto == 'USDCPOLYGON') echo ' selected="selected"'; ?>>
USD Coin POLYGON
</option>
         <option class="directionin" value="TUSDERC20" <?php if ($preurlto == 'TUSDERC20') echo ' selected="selected"'; ?>>
TrueUSD ERC20
</option>
<option class="directionin" value="TUSDTRC20" <?php if ($preurlto == 'TUSDTRC20') echo ' selected="selected"'; ?>>
TrueUSD TRC20
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
       <option class="directionin" value="WUUSD" <?php if ($preurlto == 'WUUSD') echo ' selected="selected"'; ?>> 
Western Union USD
</option>
    <option class="directionin" value="WUEUR" <?php if ($preurlto == 'WUEUR') echo ' selected="selected"'; ?>> 
Western Union EUR
</option>
    <option class="directionin" value="MGUSD" <?php if ($preurlto == 'MGUSD') echo ' selected="selected"'; ?>> 
MoneyGram USD
</option>
    <option class="directionin" value="MGEUR" <?php if ($preurlto == 'MGEUR') echo ' selected="selected"'; ?>> 
MoneyGram EUR
</option>
    <option class="directionin" value="WIREUSD" <?php if ($preurlto == 'WIREUSD') echo ' selected="selected"'; ?>> 
Bank Transfer USD
</option>
    <option class="directionin" value="WIREEUR" <?php if ($preurlto == 'WIREEUR') echo ' selected="selected"'; ?>> 
Bank Transfer EUR
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

<button  class="directionsubmit"><?php
    if($lang == "ru"){
                      echo 'Обмен';
                    }else {
                         echo 'Exchange';
                    }	
    ?></button>
</form>

<!--
<div class="sbox" >


<div class="leftlabel" ><span class="fpart">CryptoCurrency</span><span class="spart"> Wallets</span></div>


<div class="ulogoo" >












</div>




    


</div>
-->
    
    <div class="sbox socialsbox" >







<div class="socleftlabel" ><span class="fpart">Social</span><span class="spart"> Media</span></div>




	<?php 
	 echo'<div class="socailtelegram disc" ><a target="_blank"  href="https://discord.gg/6zv27xwNMB">@discord_bot</a></div><br>';
	 echo'<div class="socailtelegram tele" ><a target="_blank" href="https://t.me/ushange_Bot">@ushange_bot</a></div><br>'; 
		echo'<div class="socailtelegram tele" ><a target="_blank" href="https://t.me/ushangecom">@ushange_channel</a></div><br>';
         
      echo'<div class="socailtelegram twitter" ><a target="_blank"  href="https://twitter.com/UshooseC">@twitter</a></div><br>';
      echo'<div class="socailtelegram youtube" ><a target="_blank" href="https://www.youtube.com/channel/UC54GHZS_P9mNmhLUm6TqACw">@youtube_channel</a></div>';
						?>

















</div>
 
</div>



    
<div class="ratesrapp">
		
	<div class="calcamount"><input class="amount indexa" >
	   <button class="indexa indexamount1"type="submit" name="check"><span>Calculate</span> </button></div>
		
		
			
						<?php
						
						

						$nnumber = 0;

    
    
    
    

      

  
		
      
      
      if (count($arows) > 0) {
          	echo '<div class="allexchanges"> ';
           
                        if($lang == "ru"){
                         echo 'Обмен от '.$urlfrom. ' на '.$urlto;	
                    }else {
                        echo 'Exchange From '.$urlfrom. ' To '.$urlto;	
                    }
                       
          echo  '</div>';
            
           	
					
					 if($lang == "ru"){
                       
                         echo "<table id='rates'><tr><th class='numbers'>#</th><th class='exchangername'>Обменник</th><th>от</th><th>на</th><th>Резерв</th><th>Mode</th><th class='minamount'>минимум</th></tr>";
                    }else {
                        echo "<table id='rates'><tr><th class='numbers'>#</th><th class='exchangername'>Exchanger</th><th>From</th><th>To</th><th>Reserve</th><th>Mode</th><th class='minamount'>minimum</th></tr>";
                    }		
						
		
							// output data of each row
			
function compare_rows($row1, $row2) {
    // parse the $get2 values from each row
    preg_match('/<span class=\'gett\'>(.*?)<\/span>/', $row1, $matches1);
    preg_match('/<span class=\'gett\'>(.*?)<\/span>/', $row2, $matches2);
    $get2_1 = floatval($matches1[1]);
    $get2_2 = floatval($matches2[1]);

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
$classs=0;
// output the sorted rows
foreach ($arows as $row) {
    $classs= $classs+1;
    echo "<tr><td class='hash'><a  target='_blank'> <span class='hash".$classs. "'>". $classs.".</span> </a></td>";
    echo $row;
 echo '</tr>';


    
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
                                    $pminamount = (float) preg_replace('/[^0-9.]/', '', $pminamount);
                                    $pminamount = number_format($pminamount, 2);
                                      $pamount = $item->amount;
                                      $pamount = number_format((float)$pamount, 2, '.', '');
                                    $class = $class +1;
									$nnumber = $nnumber +1;
                                    
                                echo "<tr><td class='hash'><a  target='_blank'> <span class='hash".$class. "'>". $nnumber.".</span> </a></td><td class='exchangername label'><a  href=". $preflink." target='_blank' style=' text-decoration:underline; color:#CC3300; text-shadow: 0 0 1px #fff;' ><span>" . $pname. "</span></a></td><td class='give'><a  target='_blank'> <span class='send".$class."'>". $pin."</span> <span class=' labelfont from'>". $pfrom. "</span></a></td><td  class='get'><a    target='_blank'><span class='gett".$class."'>". $pout." </span><span class='labelfont from'>". $pto. "</span></a></td><td ><a  target='_blank'>" . $pamount."</a></td><td class='modetd'><a  target='_blank'>" . $pmode. "</a></td><td class='minamount'><a  target='_blank'>" . $pminamount . "</a></td></tr>";    
                                    
                                    
                                }
	
          	
	
    	   		echo "</table>"; 
            
        }				
						
						
						
							
						
						
						
	







    
    
    
    
    
    
    
    
    
    
    
    
						?>

	













 <?php /*
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

    */
    ?>


</div>


       
   
     
     

    
   

</div>


<div class="bfooter" >

<?php
// Replace with your database details
 
   /* 
               
   


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
$conn->close();*/
?>


</div>


<span class="update"></span>
<input type="hidden" class="amountbefore" >
<div class="footerr" >
<div class="leftcopright" >
Copyright © <?php echo date("Y");?> ushange.Com. All Rights Reserved.

</div>

	<ul class="rest restfooter">
				
					<li class="nav ">  <a href="./contact" class="btn10 rightbtn" >Contact</a></li>
				

</ul></div></div>
    <!-- Default Statcounter code for ushange
https://ushange.com/ -->
<script type="text/javascript">
var sc_project=12734384; 
var sc_invisible=1; 
var sc_security="7579ed7a"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="real time web
analytics" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12734384/0/7579ed7a/1/"
alt="real time web analytics"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
</body>

<?php   ?>
</html>

