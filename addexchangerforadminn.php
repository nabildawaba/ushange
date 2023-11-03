<?php   session_start();
header('Content-Type: text/html; charset=utf-8');
	if ( $_SERVER['REQUEST_URI'] != strtolower ( $_SERVER['REQUEST_URI'] ) )
    header ('Location: //' . $_SERVER['HTTP_HOST'] . strtolower ( $_SERVER['REQUEST_URI'] ));
	
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
	

	

error_reporting(E_ALL);
ini_set('display_errors', '0');
?>
<html>
 <head>

  	<meta charset="utf-8">
  	<title>Exchanger Monitor</title>

<meta name="keywords" content="Tether, Crypyocurrency, obmen, обмен валют, обмен валют, обмен валют харьков, обменник валют, бестчендж, обменник, обменки, обмен криптовалют,
шахта обменник, best change, обменники валют онлайн, обменник криптовалют, crypto exchange, exchange cryptocurrency, best crypto, buy crypto, best crypto exchange, мониторинг, лучшие курсы, мониторинг обменников, курсы обмена, валюта, выгодный обмен, все обменники, обменные пункты, обменник, обмен валют, список обменников">
<meta name="description" content="ushange - мониторинг обменников, который предлагает актуальную информацию о курсах всех ведущих ручных и автоматических обменных пунктов электронных валют. Если вы хотите без труда найти выгодные курсы, вам поможет наш мониторинг обменных пунктов" />
 
 <meta name="viewport" content="width=960" />
<link href="style.css"  rel="stylesheet" type="text/css">
<link href="style2.css"  rel="stylesheet" type="text/css">
<link href="flags.css"  rel="stylesheet" type="text/css">
 <script src="./jquery-1.12.0.min.js"></script>
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
  </div>

				<ul class="rest">
					<li class="nav">   <a href="./" class="btn10 " >Exchange</a> </li>
						<span> | </span>
					<li class="nav ">  <a href="./addexchanger" class="btn10 addd" >Add Exchanger</a></li>
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
<span>Last Update: Wed, 13 Apr 2022 11:00:03 +0000	</span>


</div>
    </nav>





</header>
<div class=" gd"> </div>

<!-- *****************************************************************************-->

 

 <div class="scamdiv"><div class=" scamhead">ADMIN</div></div>

					<?php
// Load the XML file
$xml = simplexml_load_file('exchangername.xml');

// Check if there are any records in the XML file
if (count($xml->record) > 0) {

  // Create a table to display the records
  echo "<table id='exchangers'><tr><th>ID</th><th>Name</th><th>Mode</th><th>XML</th><th>Email</th></tr>";

  // Loop through each record in the XML file
  $id = 0;
  foreach ($xml->record as $record) {
    $id++;
    // Display the record in a table row
    echo "<tr><td>" . $id . "</td><td class='name" . $id . "'>" . $record->Name . "</td><td class='mode" . $id . "'>" . $record->Mode . "</td><td class='xml" . $id . "'>" . $record->XML . "</td><td class='email" . $id . "'>" . $record->Email . "</td></tr>";
  }

  echo "</table>"; // Close the table element
} else {
  echo "0 results"; // Display a message if there are no records in the XML file
}

						?>
<!--<form action="insertrates.php" class="formm" method="POST">
<input type="hidden" class="nameinput" name="nameinput">
<input type="hidden" class="modeinput" name="modeinput">
<input type="hidden" class="xmlinput" name="xmlinput">

<input  class="Exchangerin reflink" name="reflink" placeholder="Reflink">
<button class="input_submit fromto"type="submit" name="check"><span>Submit</span> </button>
</form>
-->
<!--
<input  class="Exchangerin from" name="from" placeholder="from">
<input  class="Exchangerin to" name="to" placeholder="to">-->

<div class="bfooter" ><h1>

</h1>
</div>


<span class="update"></span>
<input type="hidden" class="amountbefore" >
<div class="footerr" >
<div class="leftcopright" >
Copyright © 2009-2021 USHANGE.COM. All Rights Reserved.
</div>

	<ul class="rest restfooter">
					<li class="nav">   <a href="" class="btn10 " >	About</a> </li>
					<span class="leftbtn"> | </span>
					<li class="nav ">  <a href="./addexchanger" class="btn10 rightbtn" >Contact</a></li>
				

</ul></div></div>
<script type="text/javascript">



   function reply_click(clicked_id)
  {
	  

	  var id = clicked_id;
	
	    var name = 'name';
		 var name = '.' + name + id ;
	var name = 	 $(name).html();	
	
	 var xml = 'xml';
		 var xml = '.' + xml + id ;
	var xml = 	 $(xml).html();	
	
	
	 var mode = 'mode';
		 var mode = '.' + mode + id ;
	var mode = 	 $(mode).html();	
	
	
	$('.nameinput').val(name);	
	$('.modeinput').val(mode);	
	$('.xmlinput').val(xml);	
  	
	     
  }
</script>

</body>

<?php   ?>
</html>

