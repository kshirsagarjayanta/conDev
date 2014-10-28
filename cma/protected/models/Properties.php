<?php

/**
 * This is the model class for table "properties".
 *
 * The followings are the available columns in table 'properties':
 * @property string $prop_id
 * @property string $prop_name
 * @property string $prop_type
 * @property string $prop_category
 * @property string $client_id
 *
 * The followings are the available model relations:
 * @property ContactProperties[] $contactProperties
 * @property Client $client
 */
class Properties extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Properties the static model class
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
		return 'properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prop_name, prop_type, prop_category, client_id', 'required'),
			array('prop_name', 'length', 'max'=>200),
			array('prop_type, prop_category', 'length', 'max'=>45),
			array('client_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('prop_id, prop_name, prop_type, prop_category, client_id', 'safe', 'on'=>'search'),
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
			'contactProperties' => array(self::HAS_MANY, 'ContactProperties', 'prop_id'),
			'client' => array(self::BELONGS_TO, 'Client', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'prop_id' => 'Prop',
			'prop_name' => 'Property Name',
			'prop_type' => 'Property Type',
			'prop_category' => 'Property Category',
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

		$criteria->compare('prop_id',$this->prop_id,true);
		$criteria->compare('prop_name',$this->prop_name,true);
		$criteria->compare('prop_type',$this->prop_type,true);
		$criteria->compare('prop_category',$this->prop_category,true);
		$criteria->compare('client_id',$this->client_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}