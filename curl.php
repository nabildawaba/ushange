<?php
  ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$url = "https://1wm.kz/request-exportxml.xml?lang=ru";

			$ch = curl_init();
								curl_setopt ($ch, CURLOPT_URL, $url);
								curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
								curl_setopt($ch, CURLOPT_HEADER, false);
								curl_setopt ($ch, CURLOPT_CAINFO, "cacert.pem");
								$xmll = curl_exec($ch);
								echo $xmll;
								if(curl_exec($ch) === false)
    { echo 'Curl error: ' . curl_error($ch); }
else
    { echo 'Operation completed without any errors'; }
	
	$xml = simplexml_load_string($xmll);
	
		foreach($xml->item as $item) {
			  $give = $item->from;
			  echo $give;
		}
?>