<?php	
		//require_once('simple_html_dom.php'); 
		
class getData{
 public function updateValueById($table, $idparam, $value)
 {
	include('connect.php');
	$Now = new DateTime("now");
	$Now = $Now->format('Y-m-d H:i:s'); 
	$sql = "update `".$table."` set value='".$value."',date='".$Now."' where id='".$idparam."'";
	$conn->query($sql);
 }

 public function getParam($table, $paramname, $idparam)
 {	 
	include('connect.php');
 
	$sql = "SELECT ".$paramname." from `".$table."` where id='".$idparam."' limit 1";

	$result = $conn->query($sql);
	foreach($result as $row)
		return $param = $row[$paramname];
 }
 
 public function getDataById($dateParse, $idparam, $table)
 {                                                    
	$dateNow = new DateTime("now");
	$dateNow -> modify('-1 minute'); 
	$dateNow = $dateNow->format('Y-m-d H:i:s'); 
		
	if($dateParse < $dateNow)
	{
		$parseResult = $this -> parseValue();
		$this -> updateValueById($table, $idparam, $parseResult);
		return $parseResult;
	}
	else
	{
		return $this -> getParam($table, "value", $idparam);
	}
 }
 
  public function parseValue()
 {
	
 }
}
?>