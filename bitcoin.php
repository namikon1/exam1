<?php 
require("xcoin_api_client.php");

$api = new XCoinAPI("6363d754651a749dfd17a5a378208be2", "5dc10e32add3f38ba6d410e6f4fa3dba");
/*
 $rgParams['order_currency'] = 'BTC';
 $rgParams['payment_currency'] = 'KRW';

$result = $api->xcoinApiCall("/info/account", $rgParams);

print_r($result);
echo "<br />";
*/

$result = $api->xcoinApiCall("/public/ticker/");
echo "<br/> <strong>비트코인[BTC]</strong> <br />";
echo "고가 / 저가 : " . $result->data->max_price . " / " . $result->data->min_price . "<br />";
echo "현재가 : " . $result->data->closing_price . "<br />";
echo "매도 : " . $result->data->sell_price . "<br />";
echo "매수 : " . $result->data->buy_price . "<br /><br />";

$result = $api->xcoinApiCall("/public/ticker/ETH");
echo "<br/> <strong>이더리움[ETH]</strong> <br />";
echo "고가 / 저가 : " . $result->data->max_price . " / " . $result->data->min_price . "<br />";
echo "현재가 : " . $result->data->closing_price . "<br />";
echo "매도 : " . $result->data->sell_price . "<br />";
echo "매수 : " . $result->data->buy_price . "<br />";
/*
$result = $api->xcoinApiCall("/public/ticker/DASH");
echo "<br/> <strong>대시[DASH]</strong> <br />";
echo "고가 / 저가 : " . $result->data->max_price . " / " . $result->data->min_price . "<br />";
echo "현재가 : " . $result->data->closing_price . "<br />";
echo "매도 : " . $result->data->sell_price . "<br />";
echo "매수 : " . $result->data->buy_price . "<br /><br />";

$result = $api->xcoinApiCall("/public/ticker/XRP");
echo "<br /> <strong>리플[XRP]</strong> <br />";
echo "고가 / 저가 : " . $result->data->max_price . " / " . $result->data->min_price . "<br />";
echo "현재가 : " . $result->data->closing_price . "<br />";
echo "매도 : " . $result->data->sell_price . "<br />";
echo "매수 : " . $result->data->buy_price . "<br />";
*/
/*
$api = new XCoinAPI();
$result = $api->execute("/public/ticker");
echo "status : " . $result->status . "<br />";
echo "last : " . $result->data->closing_price . "<br />";
echo "sell : " . $result->data->sell_price . "<br />";
echo "buy : " . $result->data->buy_price . "<br />";
*/

/*
 * public api
 *
 * /public/ticker
 * /public/recent_ticker
 * /public/orderbook
 * /public/recent_transactions
 */

/*
 * private api
 *
 * endpoint				=> parameters
 * /info/current		=> array('current' => 'btc');
 * /info/account
 * /info/balance		=> array('current' => 'btc');
 * /info/wallet_address	=> array('current' => 'btc');
 */



/*
 * date example
 * 2014-12-30 13:29:49 = 1419913789000
 * 2014-12-29 14:29:49 = 1419830989000
 * 2014-12-23 14:29:49 = 1419312589000
 * 2014-11-30 14:29:49 = 1417325389000
 */

?>