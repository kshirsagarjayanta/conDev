<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class ClientIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
// 		$users=array(
// 			// username => password
// 			'demo'=>'demo',
// 			'admin'=>'admin',
// 		);
		$client = Client::model()->authenticateClient($this->username, $this->password);
		if($client === null){
			$this->errorCode = self::ERROR_USERNAME_INVALID;
		}
		else if($this->password !== $client->password){
			$this->errorCode = self::ERROR_PASSWORD_INVALID;
		}
		else{
			Yii::app()->user->setState('client_id', $client->client_id);// set client_id in session
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}
}