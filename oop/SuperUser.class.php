<?php
class superuser extends user implements Isuperuser
{

	public $role;
	static $superuserCount =0;
	function __construct($a,$b,$c,$d){     //перегрузка методів
		parent :: __construct($a,$b,$c);	//батьківський клас
		$this -> role = $d;
		self :: $superuserCount++;
	}
	function showInfo(){
		parent:: showInfo();
		echo "Role =" .$this -> role, "<br />";
		//$this -> __clone;
		echo "<br />";
	}
	function getInfo(){
		$mas = array();
		foreach ($this as $key => $value) {
			$mas[$key] = $value;
		}
		return $mas;
	}

}

?>
