﻿<?php
include('getData.php');
include('simple_html_dom.php'); 
	$table = "data";
	$dateParam = "date";
	$idParam= "gismeteo_pogoda";
	
class main extends getData{	
 public function parseValue()
 {
	$gismeteo = file_get_html('http://www.gismeteo.ru/city/daily/4690/'); 	
	
	$parseValue =  $gismeteo->find('dd.value')[0]->innertext;
	return "<b>".$parseValue."</b>";
 }
}

$main = new main();
echo $main -> getDataById($main -> getParam($table, $dateParam, $idParam), $idParam, $table);
?>