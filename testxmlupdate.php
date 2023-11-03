<?php
			error_reporting(E_ALL);
ini_set('display_errors', '1');

ini_set('log_errors', true);
    $url = 'https://d-obmen.cc/Rates.aspx';
						 $ch = curl_init();
                                curl_setopt ($ch, CURLOPT_URL, $url);
                                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($ch, CURLOPT_HEADER, false);
                                curl_setopt ($ch, CURLOPT_CAINFO, __DIR__ . "/cacert.pem");
                                $xml_string = curl_exec($ch);
echo $xml_string;
                                 curl_close($ch);

							
                      

// Fetch the content of the page
$content = file_get_contents($xml_string);

// Save the content as an XML file
file_put_contents('rates.xml', $content);
   


?>