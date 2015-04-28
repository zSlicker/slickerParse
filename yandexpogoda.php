<?php
include('simple_html_dom.php'); 
include('connect.php');

$sql = "SELECT dateParse from `data` where id='yandex_pogoda' limit 1";

$result = $conn->query($sql);
foreach($result as $row)
	$dateParse = $row["dateParse"];

$dateNow = new DateTime("now");
$dateNow -> modify('-1 minute'); 
$dateNow = $dateNow->format('Y-m-d H:i:s'); 

$pogoda = 0;

if($dateParse < $dateNow)
{
	$yandexpogoda = file_get_html('https://pogoda.yandex.ru/novosibirsk/'); 
	$pogoda = $yandexpogoda->find('div.current-weather__thermometer')[0]->innertext;
	$sql = "update `data` set value='".$pogoda."',dateParse=NOW() where id='yandex_pogoda'";

	$test = $conn->query($sql);
	
	$yandexpogoda->clear(); 
	unset($yandexpogoda);
}
else
{
	$sql = "select value from `data` where id='yandex_pogoda'";

	$res = $conn->query($sql);
	
	foreach($res as $row)
		$pogoda = $row["value"];
}

	echo "<b>", $pogoda, "</b>";

?>