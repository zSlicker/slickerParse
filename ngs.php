<?php
include('simple_html_dom.php');  

$ngs = file_get_html('http://pogoda.ngs.ru'); 		
echo "<b>", $ngs->find('span.value__main')[0]->innertext, "°C</b>";

$ngs->clear(); 
unset($ngs);
?>