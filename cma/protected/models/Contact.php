<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property string $contact_id
 * @property string $ip_address
 * @property string $activity_timestamp
 * @property string $client_id
 *
 * The followings are the available model relations:
 * @property Client $client
 */
class Contact extends CActiveRecord
{
	private $ip, $clienturl, $contact;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
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
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('contact_id, ip_address, activity_timestamp, client_id', 'required'),
			array('contact_id, client_id', 'length', 'max'=>20),
			array('ip_address', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_id, ip_address, activity_timestamp, client_id', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'ip_address' => 'Ip Address',
			'activity_timestamp' => 'Activity Timestamp',
			'client_id' => 'Client',
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

		$criteria->compare('contact_id',$this->contact_id,true);
		$criteria->compare('ip_address',$this->ip_address,true);
		$criteria->compare('activity_timestamp',$this->activity_timestamp,true);
		$criteria->compare('client_id',$this->client_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	/**
	*Constructor for web api calls
	*/
	/*public function __construct($ip, $clienturl){
		$this->_ip = $ip;
		$this->_clienturl = $clienturl;
	}
	*/
}