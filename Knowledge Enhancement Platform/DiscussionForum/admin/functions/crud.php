<?php
include "functions.php";

$action = $_POST['action'];

switch($action){
	case "deleteuser":
	$id= $_POST['id'];
	deleteuser($id);
	break;
}
?>