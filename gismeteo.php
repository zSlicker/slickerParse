<?php
include('simple_html_dom.php');  

$gismeteo = file_get_html('http://www.gismeteo.ru/city/daily/4690/'); 
	
echo "<b>", $gismeteo->find('dd.value')[0]->innertext, "</b>";

$gismeteo->clear(); 
unset($gismeteo);
?>