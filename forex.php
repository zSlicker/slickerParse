<?php
include('simple_html_dom.php');  

$forex = file_get_html('http://www.forexpf.ru'); 	

echo "<td>";
echo "USD/RUB ЦБ " , $forex->find('tr.curs')[0]->find('td')[2]->innertext, 
"</br> USD/RUB Forex  на ", $forex->find('tr.curs')[5]->find('td')[3]->innertext,"</td><td>", 
"<b>", 
$forex->find('tr.curs')[1]->find('td')[2]->innertext, "</b>" , "</br><b>", 
$forex->find('tr.curs')[5]->find('td')[1]->innertext, "</b></td>";

$forex->clear(); 
unset($forex);

?>