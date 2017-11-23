<!--
Date: 07-Nov-2017
Author: Deepak P
Function: Get cryptocurrency ticker price for btc-omni pair using cryptonator API
-->
<?php
$base = 'omni';
$target = 'btc';
$btc_omni_ticker_price = 0;
$api_url = "https://api.cryptonator.com/api/ticker/$base-$target";
$rslt = file_get_contents($api_url);
if(isset($rslt) && !empty($rslt)){
	$rslt_arr = json_decode($rslt,true);
	if(isset($rslt_arr) && !empty($rslt_arr) && is_array($rslt_arr) && isset($rslt_arr['ticker']['base']) && strtolower($rslt_arr['ticker']['base']) == trim($base) && isset($rslt_arr['ticker']['target']) && strtolower($rslt_arr['ticker']['target']) == trim($target) &&  isset($rslt_arr['ticker']['price'])){
		$btc_omni_ticker_price = round($rslt_arr['ticker']['price'],5);
	}
}
echo 'OMNI-BTC '.$btc_omni_ticker_price;