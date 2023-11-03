<?php   session_start();

	if ( $_SERVER['REQUEST_URI'] != strtolower ( $_SERVER['REQUEST_URI'] ) )
    header ('Location: //' . $_SERVER['HTTP_HOST'] . strtolower ( $_SERVER['REQUEST_URI'] ));
	
	error_reporting(E_ALL);
ini_set('display_errors', '0');

ini_set('log_errors', false);
	

		$from_to = $_GET['title'];				
		

		$tabledirection =  strtoupper($from_to);
$parts = explode('_', $from_to);
$urlfrom = $parts[0];
$urlto = $parts[1];

$urlfromclass = $urlfrom;
$urltoclass = $urlto. '1';

$urlfrom = strtoupper($urlfrom);
$urlto = strtoupper($urlto);


	
					
					
	
			$directioninclass =		  $_SESSION['directionin'] ;
  $directiontoclass =  $_SESSION['directionto'] ; 



error_reporting(E_ALL);
ini_set('display_errors', '0');
?>
<html>
 <head>

  	<meta charset="utf-8">
	<title>ushange.com</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="description" content="ushange exchanger monitor automatically monitors the rates from the best automatic crypto, fiat and e-currencies exchange websites">
<meta name="keywords" content="digital currency, aggregator, e-currency exchange, exchanger monitor, e-money exchange, best rates, exchange rates, list of exchangers">
 
 <meta name="viewport" content="width=960" />
<link href="style.css"  rel="stylesheet" type="text/css">
<link href="style2.css"  rel="stylesheet" type="text/css">
<link href="flags.css"  rel="stylesheet" type="text/css">

<link rel="shortcut icon" type="image/png" href="./favicon.jpg"/>
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

			</div></div>

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

 <div class="scamdiv">
<div class="socailtelegram tele" ><a target="_blank" href="https://t.me/ushangecom">Contact</a></div><br>
 </div>

<div class="myemail">
         
         
       <p> Ask us anything or if you are an exchanger please send us xml link at
           <br>  
             <span class="emailicon"> 
           <span class="emailto"> e-mail:</span>  
     info@ushange.com
                 
     </span>
</p>
         </div>



<div class="bfooter" >




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


</html>

