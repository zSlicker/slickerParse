<?php
include('simple_html_dom.php');  

$yandexmmvb = file_get_html('http://www.yandex.ru'); 

echo "<td>";
echo  $yandexmmvb->find('span.inline-stocks__item__baloon_inner')[0]->innertext;
echo "</td><td> <b>   ", $yandexmmvb->find('span.inline-stocks__value_inner')[0]->innertext, "</b>";
echo "</td>";

$yandexmmvb->clear(); 
unset($yandexmmvb);


?>