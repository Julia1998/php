<?php
function __autoload($name){
 include $name.".class.php";
}
$usr1 = new user("Julia","Finde","hdfh3");
echo user::INFO_TITLE;
echo "<br />";
$usr1 -> showInfo();

$usr4 = clone $usr1; 
$usr4 -> showInfo();

$usr2 = new user("Vika","Cherri","234fg");
$usr2-> showTitle();
$usr2 -> showInfo();

$usr3 = new user("Pasha","Cooced","5986h");
$usr3 -> showInfo();



/**
наслідування класів
*/
$user = new superuser("admin","root","pass5452", "Administration man");
	$user -> showInfo ();
	print_r($user -> getInfo());
	echo "<hr />";
	print_r ("Now user count:".
		user :: $userCount);
	echo "<br />";
	print_r("Now admin count:".
	superuser :: $superuserCount); 
	function checkObject($obj1){
		if($obj1 instanceOf user){
			if($obj1 instanceOf  superuser)
			echo "<p>user it`s admin";
		else
			echo "<p> usr1 it`s user";
		}else
			echo"<p>usr1 don`t user";
	}
	checkObject ($usr1);
	checkObject ($user);
	$k = new user();
	checkObject ($k);
	