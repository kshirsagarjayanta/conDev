<?php

/**
 * This is the model class for table "client".
 *
 * The followings are the available columns in table 'client':
 * @property string $client_id
 * @property string $client_name
 * @property string $contact_number
 * @property string $website_url
 * @property string $login_id
 * @property string $password
 *
 * The followings are the available model relations:
 * @property Contact[] $contacts
 * @property Forms[] $forms
 * @property LogEntries[] $logEntries
 * @property Pages[] $pages
 * @property Properties[] $properties
 */
class Client extends CActiveRecord
{
	public $passwordrepeat;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_name, contact_number, website_url, login_id, password', 'required'),
			array('client_name', 'length', 'max'=>45),
			array('contact_number', 'length', 'max'=>10),
			array('website_url', 'length', 'max'=>200),
			//array('website_url', 'unique', 'message'=>'Url already taken.'),
			array('login_id, password, passwordrepeat', 'length', 'max'=>128),
			array('login_id', 'unique', 'message'=>'Username already taken.'),
			array('passwordrepeat', 'compare', 'compareAttribute'=>'password', 'message'=>'Passwords do not match.'),
			//array('passwordrepeat', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('client_id, client_name, contact_number, website_url, login_id, password, passwordrepeat', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'contacts' => array(self::HAS_MANY, 'Contact', 'client_id'),
			'forms' => array(self::HAS_MANY, 'Forms', 'client_id'),
			'logEntries' => array(self::HAS_MANY, 'LogEntries', 'client_id'),
			'pages' => array(self::HAS_MANY, 'Pages', 'client_id'),
			'properties' => array(self::HAS_MANY, 'Properties', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'client_id' => 'Client',
			'client_name' => 'Name',
			'contact_number' => 'Contact Number',
			'website_url' => 'Website Url',
			'login_id' => 'User name',
			'password' => 'Password',
			'passwordrepeat' => 'Re-type Password',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('client_name',$this->client_name,true);
		$criteria->compare('contact_number',$this->contact_number,true);
		$criteria->compare('website_url',$this->website_url,true);
		$criteria->compare('login_id',$this->login_id,true);
		$criteria->compare('password',$this->password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	 *  Getter got password repeat 
	 */
	public function getPasswordRepeat(){
		return $this->passwordrepeat;
	}

	/**
	 *  Setter  password repeat
	 */
	public function setPasswordRepeat($pass){
		$this->passwordrepeat = $pass;
	}

// 	public function beforeSave(){
// 		if($this->isNewRecord){
// 			$this->client_id = $this->generateUniqueId();
// 		}
// 		//echo "In beforesave".$this->client_id;
// 		//exit();
// 	}
	
	public function generateUniqueId(){
		return substr((time()*rand()),0,10);
	}
}