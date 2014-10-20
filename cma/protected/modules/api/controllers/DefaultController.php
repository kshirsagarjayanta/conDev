<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		//echo 'Calling Index... Parameter: '. $param;
		//$this->render('index');
		$arr = array('controller' => $this->id, 'action' => $this->action->id,  'status' => 'OK', 'parameter' => $_POST['param']);
		$this->sendJSONResponse($arr);
		Yii::app()->end;
		//exit();
	}
	/*
	public function actionAddme()
	{
		if(isset($_POST['APPID'])){
		//if($param!=""){
			// Authenticate(check client's APPID with its URL) Client's APPID. If Authenticated add contact
			$arr = array('controller' => $this->id, 'action' => $this->action->id,  'status' => 'OK', 'ip' => $_SERVER['REMOTE_ADDR'], 'name' => $_SERVER['HTTP_HOST']);
		}
		else{
			$arr = array('controller' => $this->id, 'action' => $this->action->id,  'status' => 'ERROR');
		}
		echo $this->sendJSONResponse($arr);
	}
	
	public function sendJSONResponse($arr){
		//header('content-type:application/json');
		return json_encode($arr);
	}
	*/
}
