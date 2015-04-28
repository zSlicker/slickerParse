<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "yandex_torg";
	
class main extends getData{	
 public function parseValue()
 {
	$yandexmmvb = file_get_html('http://www.yandex.ru'); 
	
	$parseText = $yandexmmvb->find('span.inline-stocks__item__baloon_inner')[0]->innertext;
	$parseValue = $yandexmmvb->find('span.inline-stocks__value_inner')[0]->innertext;
	return "<td>$parseText</td>
				<td><b>$parseValue</b></td>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);

?>