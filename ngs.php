<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "ngs_pogoda";
	
class main extends getData{	
 public function parseValue()
 { 
	$ngs = file_get_html('http://pogoda.ngs.ru'); 		
	
	$parseValue =  $ngs->find('span.value__main')[0]->innertext;
	return "<b>".$parseValue."°C</b>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);
?>