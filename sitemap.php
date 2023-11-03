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

$base_url = 'https://ushange.com/';

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($new_array as $url) {
  $xml .= '<url>' . "\n";
  $xml .= '<loc>' . $base_url . $url . '&amp;lang=ar</loc>' . "\n";
  $xml .= '</url>' . "\n";

    
}

$xml .= '</urlset>';

file_put_contents('arssitemap.xml', $xml);
?>