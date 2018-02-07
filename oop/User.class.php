<?php
class user extends Auser
{
	const INFO_TITLE = "<p><b>Date user:<b/ ></><br />";
	public $name;
	public $login;
	public $passwords;
	static $userCount =0;
	function __construct($a="", $b="", $c=""){
			$this -> name = $a;
			$this -> login = $b;
			$this -> passwords = $c;
			self:: $userCount++;
		}
	
	function showInfo(){
		echo "Name =" .$this -> name, "<br />";
		echo "Login =" .$this -> login, "<br />";
		echo "Passwords =" .$this -> passwords, "<br />";
		$this -> __clone;
		echo "<br />";
	}
	function __clone(){
		$this -> name = "Guest";
		$this -> login = "guest";
		$this -> passwords = "qwerty";
	}
	function showTitle(){
		echo self :: INFO_TITLE;
	}
}

