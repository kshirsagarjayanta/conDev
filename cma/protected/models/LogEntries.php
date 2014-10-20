<?php

/**
 * This is the model class for table "log_entries".
 *
 * The followings are the available columns in table 'log_entries':
 * @property string $id
 * @property string $page_name_visited
 * @property string $form_submitted
 * @property string $visit_time
 * @property string $client_id
 * @property string $contact_id
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Contact $contact
 */
class LogEntries extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LogEntries the static model class
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
		return 'log_entries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('visit_time, client_id, contact_id', 'required'),
			array('page_name_visited, form_submitted', 'length', 'max'=>200),
			array('client_id, contact_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, page_name_visited, form_submitted, visit_time, client_id, contact_id', 'safe', 'on'=>'search'),
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
			'contact' => array(self::BELONGS_TO, 'Contact', 'contact_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'page_name_visited' => 'Page Name Visited',
			'form_submitted' => 'Form Submitted',
			'visit_time' => 'Visit Time',
			'client_id' => 'Client',
			'contact_id' => 'Contact',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('page_name_visited',$this->page_name_visited,true);
		$criteria->compare('form_submitted',$this->form_submitted,true);
		$criteria->compare('visit_time',$this->visit_time,true);
		$criteria->compare('client_id',$this->client_id,true);
		$criteria->compare('contact_id',$this->contact_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}