<?php
include('simple_html_dom.php');  

$yandexoil = file_get_html('http://www.yandex.ru'); 

echo "<table><tr><td>";
echo  $yandexoil->find('span.inline-stocks__item__baloon_inner')[2]->innertext;
echo "</td><td>";
echo " <b>", $yandexoil->find('span.inline-stocks__value_inner')[2]->innertext, "</b>";
echo "</td></tr>";
echo "</table>";

$yandexoil->clear(); 
unset($yandexoil);


?>