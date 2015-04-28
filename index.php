<?php
include('simple_html_dom.php');  

echo "<body bgcolor>";

	echo '
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script>
	
		//yandex weather
		function refresh(){
		$.ajax({
		  type: "POST",
		  url: "yandexpogoda.php",
		  success: function(data) {
					 $("#yandexpogoda").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});

		//gismeteo weather
		$.ajax({
		  type: "POST",
		  url: "gismeteo.php",
		  success: function(data) {
					 $("#gismeteo").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});
		
		//ngs weather
		$.ajax({
		  type: "POST",
		  url: "ngs.php",
		  success: function(data) {
					 $("#ngs").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});
		
		//yandex oil
		$.ajax({
		  type: "POST",
		  url: "yandexoil.php",
		  success: function(data) {
					 $("#yandexoil").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});
		
		//yandex mmvb
		$.ajax({
		  type: "POST",
		  url: "yandexmmvb.php",
		  success: function(data) {
					 $("#yandexmmvb").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});
		
		//forex
		$.ajax({
		  type: "POST",
		  url: "forex.php",
		  success: function(data) {
					 $("#forex").html(data).hide().fadeToggle( "slow", "linear" );
		  }
		});
		}
		
		 var refreshInterval = setInterval(refresh, 10000);
	</script>
	
	<style>
	    body {
		background-color: #efefef; /* Цвет фона */
	    }	
	</style>';
	

echo "</br>Погода в Новосибирске:</br></br>";
echo "<table><tr><td>";

echo "yandex:</td><td><div id='yandexpogoda'><b>Загрузка..</b></div></td></tr><tr><td>";
echo "gismeteo:</td><td><div id='gismeteo'><b>Загрузка..</b></div></td></tr><tr><td>";
echo "ngs:</td><td><div id='ngs'><b>Загрузка..</b></div></td></tr><tr><td>";

echo "</table>";

echo "</br></br>Курс доллара:</br></br>";

echo "<table><tr id=forex><td><b>Загрузка..</b></td></tr>";

echo "<tr id=yandexmmvb><td><b>Загрузка..</b></td></tr>";

echo "</table>";


echo "</br></br>Нефть:</br></br>";

echo "<table><tr><td><div id=yandexoil>";
echo " <b>Загрузка...</b>";
echo "<div></td></tr>";
echo "</table>";


echo "</body>";

?>