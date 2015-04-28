<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "yandex_oil";
	
class main extends getData{	
 public function parseValue()
 {
	$yandexoil = file_get_html('http://www.yandex.ru'); 
	
	$parseText = $yandexoil->find("span.inline-stocks__item__baloon_inner")[2]->innertext;
	$parseValue = $yandexoil->find("span.inline-stocks__value_inner")[2]->innertext;
	return "<table><tr><td>$parseText
	</td><td> <b>$parseValue 
	</b></td></tr></table>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);

?>