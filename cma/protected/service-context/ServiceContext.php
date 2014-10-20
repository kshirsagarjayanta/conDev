<?php

	include_once '../models/Contact.php';
	include_once '../config/constansts.php';
	
	try{
		$params = $_REQUEST;
		$contactId = $webserviceActions[$params['kntkt']];
		if($contactId == "" || $contactId.count() != 10){// change the length later according to the contact id length
			exit();// later tiemstamp should be updated to contacts db
		}
		$actionurl = $webserviceActions[$params['doo']];// get action from constants
		$clienturl = $params['klynt'];
		$ip = $parsms['ip'];
		$url = explode('/', $actionurl);
		$controller = ucfirst(strtolower($url[0]));
		$action = strtolower($url[1]).'Action';
		
		//check if controller exists
		$controller = new $controller($ip, $clienturl);
		$results = array();
		if($controller != null){
			$results = $controller->$action();
			//log results
		}
	}
	catch(Exception $e){
		//log the error $e->getMessage()
	}
	
	exit();
?>