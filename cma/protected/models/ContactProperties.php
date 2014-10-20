<?php

/**
 * This is the model class for table "contact_properties".
 *
 * The followings are the available columns in table 'contact_properties':
 * @property string $contact_id
 * @property string $prop_id
 * @property string $prop_val
 *
 * The followings are the available model relations:
 * @property Properties $prop
 */
class ContactProperties extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ContactProperties the static model class
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
		return 'contact_properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prop_id, prop_val', 'required'),
			array('prop_id', 'length', 'max'=>10),
			array('prop_val', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('contact_id, prop_id, prop_val', 'safe', 'on'=>'search'),
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
			'prop' => array(self::BELONGS_TO, 'Properties', 'prop_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'contact_id' => 'Contact',
			'prop_id' => 'Prop',
			'prop_val' => 'Prop Val',
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
		$criteria->compare('prop_id',$this->prop_id,true);
		$criteria->compare('prop_val',$this->prop_val,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}