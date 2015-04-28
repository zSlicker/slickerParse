<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "forex_cb";
	
class main extends getData{	
 public function parseValue()
 {
	$forex = file_get_html('http://www.forexpf.ru'); 
	$parseText = $forex->find('tr.curs')[0]->find('td')[2]->innertext;
	$parseValue =  $forex->find('tr.curs')[1]->find('td')[2]->innertext;
	
	return "<td>USD/RUB ЦБ $parseText </td><td><b> 
	$parseValue </b></td>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);

?>