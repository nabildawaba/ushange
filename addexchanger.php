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
   </div>

				<ul class="rest">
					<li class="nav">   <a href="./" class="btn10 " >Обменять</a> </li>
						<span> | </span>
					<li class="nav ">  <a href="./addexchanger" class="btn10 addd" >добавить обменник</a></li>
						<span> | </span>
					<li class="nav">   <a href="./contact" class="btn10 " >Контакты</a> </li>


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
				
					<div class="servertime">Время сервера: <?php 
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

 
 <form class="inputs" action="insertnames.php" method="POST">
 
 <div class="termbox" >




<ul class='terms'>
<li>- Режим обмена должен быть одним из следующих вариантов (автоматический или ручной).</li>
<li>- URL-адрес XML обменника должен иметь URL-адрес .XML-файла, содержащего курсы. URL-адрес должен содержать http, пример: https://domain.com/rates.xml</li>
<li>- Мы можем отклонить ваш обменник из-за некоторых специфических требований.</li>
</ul>


</div>
<h2 class="h2">добавить обменник</h2>
<div class="allinputs">
<div class="inputs2">
<input class="Exchangerin Exchangername" name="Exchangername"><span class="redstar">*</span><label class="checkemaillabel"><span>О</span>бменник Имя</label>
<input class="Exchangerin Exchangermode" name="Exchangermode"><span class="redstar">*</span><label class="checkemaillabel"><span>О</span>бменник режим</label>
<input class="Exchangerin Exchangerxmllink" name="Exchangerxmllink"><span class="redstar">*</span><label class="checkemaillabel"><span>О</span>бменник XML URL</label>
    <input class="Exchangerin Exchangerxmllink" name="reflink"><span class="redstar">*</span><label class="checkemaillabel"><span>О</span>REF URL</label>
<input class="Exchangerin Exchangeremail" name="Exchangeremail"><span class="redstar">*</span><label class="checkemaillabel"><span>E</span>mail</label>
<button class="input_submit"type="submit" name="check">Отправить</button>

</div>

</div>


</form>







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

<?php   ?>
</html>

