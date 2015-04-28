<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "yandex_pogoda";
	
class main extends getData{	
 public function parseValue()
 {
	$yandexpogoda = file_get_html('https://pogoda.yandex.ru/novosibirsk/'); 
	return $yandexpogoda->find('div.current-weather__thermometer')[0]->innertext;
 }
}

$main = new main();
echo "<b>", $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table), "</b>";
?>