<?php

class ApiController extends Controller
{
	// Uncomment the following methods and override them if needed
		
	public function actionAddme()
	{
		if(isset($_POST['APPID'])){
		//if($param!=""){
			// Authenticate(check client's APPID with its URL) Client's APPID. If Authenticated add contact
			$client = Client::model()->findByPk($_POST['APPID']);
			if($client == null){
				echo $this->sendJSONResponse(array('status' => 'Unauthorised', "message" => "Unauthenticated Client"));
				exit();
			}
			if($client->website_url != $_POST['host']){
				echo $this->sendJSONResponse(array('status' => 'Unauthorised', 'message' => 'Unauthenticated Client'));
				exit();
			}
			if(isset($_POST['kntktde']) && $_POST['kntktde']!=""){
				echo "Contact already registered ".$_POST['kntktde'];
				// Add entry to log here
				//exit();
			}
			else{
				// Add contact
				try{
					$model=new Contact;
					$model->ip_address = $_SERVER['REMOTE_ADDR'];
					$model->activity_timestamp = Date('Y-m-d H:i:s');
					$model->client_id = $_POST['APPID'];
					$model->contact_id = substr((time()*rand()),0,10);
					//Contact::model()->attributes = $model;
					if($model->save()){
						$arr = array('status' => 'OK', 'ip' => $_SERVER['REMOTE_ADDR'], 'name' =>$_POST['host'], 'clientname' => $client->client_name, 'contact_id' => $model->contact_id);
						echo $this->sendJSONResponse($arr);
					}
					else{
						echo "Could Not Save";
						print_r($model->errors);
					}
				}
				catch(Exception $e){
					echo $e->getMessage();
				}
			}
		}
/*		else{
			$arr = array('controller' => $this->id, 'action' => $this->action->id,  'status' => 'ERROR');
		}		*/
	}
	
	public function sendJSONResponse($arr){
		//header('content-type:application/json');
		return CJSON::encode($arr);
	}
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/

}