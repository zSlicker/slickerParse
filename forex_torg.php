<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "forex_torg";
	
class main extends getData{	
 public function parseValue()
 {
	$forex = file_get_html('http://www.forexpf.ru'); 
	$parseText = $forex->find('tr.curs')[5]->find('td')[3]->innertext;
	$parseValue = $forex->find('tr.curs')[5]->find('td')[1]->innertext;
	
	return "<td>USD/RUB Forex на $parseText </td><td><b> 
	<b>$parseValue </b></td>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);

?>