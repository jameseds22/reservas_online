<?php

class PDO_SERVER 
{
	private $PDO;
	public $SP = array();
	private $nameSP = '';
	private $sptext = '';
 
	public function __construct()
	{
 
	}
 
	public function SPname($nameSP,$login)
	{
		//var_export($login);
		$this->nameSP = $nameSP;
 
		$host = $login['host'];
		$dbname = $login['dbname'];
		$user = $login['user'];
		$pass = $login['pass'];
		$port = $login['port'];
		$this->SP = array();

		$this->PDO = new PDO("mysql:host=$host;port=$port;dbname=$dbname",
				"$user",
				"$pass",
				array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					//PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") mysql 7.4
					1002 => "SET NAMES utf8") //mysql 8.1
				);
	}
 
	public function SP_type($v,$type){
		switch (strtoupper($type)) {
			case 'INT':
				if ($v == ''){
					$v = "null";
				}else{
					$v = $v;   
				}
			   
				break;
			case 'CHAR':
				if ($v == ''){
					$v = '""';
				}else{
					//$v = str_replace('"', "&#34;", $v);
					//$v = str_replace("'", "&#39;", $v);
					$v = '"'.addcslashes($v,'"').'"';
					//$v = "'".addcslashes($v,'"')."'";
					//$v = '"'.$v.'"';
				}
				break;
			case 'DATE':
				$f = explode('/', $v);
				$v = "'".$f[2] . '-' . $f[1] . '-' . $f[0]."'";
				break;
		}
		$this->SP[] = $v;
	}

	public function SP_text()
	{
		$sptext = " CALL ".$this->nameSP."(";

		if(is_countable($this->SP)?count($this->SP):0 >0){
			foreach ($this->SP as $value){
				$sptext.=$value.",";   
			}
		}

		$len = strlen($sptext);
		if(is_countable($this->SP)?count($this->SP):0 >0) {
			$len-=1;
		}

		$this->sptext = substr($sptext, 0, $len).");";
		//echo $this->sptext;die();
	}
	public function ExeSP(){
	   
		$this->SP_text();
		$stmt = $this->PDO->prepare($this->sptext);
		$stmt->execute();

		if ($stmt->rowCount() > 0){
			$var = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return array();
		}

		$stmt->closeCursor();

		return $var;
	}

	public function unsetPDO(){       
		unset ($this->sptext);
		unset ($this->SP);
		unset ($this->nameSP);
	}
	public function getCall(){
		$this->SP_text();
		return $this->sptext;
	}
}
  
?>
 
 
 
 
 
 
 
 