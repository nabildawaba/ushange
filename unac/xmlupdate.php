<?php

// Load XML file
$xml = simplexml_load_file("/home/ushoztkg/ushange.com/exchangername.xml") or die("Error: Cannot create object");

// Loop through each record in the XML file
foreach ($xml->record as $record) {
    $url = $record->XML;
    $fname = $record->Name;
    $reflink = $record->reflink;

    $file_name = '/home/ushoztkg/ushange.com/xmlfiles/'.$fname.'.xml';
    $file = fopen($file_name, "w");
    fwrite($file, "");
    fclose($file);

    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt ($ch, CURLOPT_CAINFO, __DIR__ . "/cacert.pem");
    $xml_string = curl_exec($ch);
    curl_close($ch);

    $file = fopen($file_name, "w");
    fwrite($file, $xml_string);
    fclose($file);
}


$filename = '/home/ushoztkg/ushange.com/datte.txt';

if (!file_exists($filename)) {
    die('File does not exist.');
}

// Read the contents of the file
$lastadded = file_get_contents($filename);

date_default_timezone_set('Africa/Cairo');
$date = date('m/d/Y h:i:s a', time());
$eupdate1 = date('l', strtotime($date)).', ';
$eupdate2 = date("d").' ';
$eupdate3 = date('F Y', strtotime($date));
$eupdate4 = date(" H:i:s");

$updatedate = $eupdate1.$eupdate2.$eupdate3.$eupdate4;

// Write the updated date to the file
file_put_contents($filename, $updatedate);


?>
