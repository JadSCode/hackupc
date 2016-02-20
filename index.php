<?php

$where = "home.tpl.php";
$tpls = "tpls";
if(isset($_GET['do'])){
	$do = $_GET['do'];
	switch($do){
		case 'buy':
				$where = 'buy.tpl.php';
		break;
		case 'retfav4me':
			 $where = 'retfav4me.tpl.php';
		break;
		case 'contact':
			 $where = 'contact.tpl.php';
		break;
		default:
			$where = 'home.tpl.php';

	}

}

$file = "includes/" . $where;
if(file_exists($file)){
	include_once $file;
}
