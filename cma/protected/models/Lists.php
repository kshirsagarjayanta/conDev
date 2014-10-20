<?php

/**
 * This is the model class for table "lists".
 *
 * The followings are the available columns in table 'lists':
 * @property string $list_id
 * @property string $list_name
 * @property string $is_dynamic
 * @property string $client_id
 *
 * The followings are the available model relations:
 * @property Criteria[] $criterias
 * @property ListsContacts[] $listsContacts
 * @property Steps[] $steps
 */
class Lists extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lists the static model class
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
		return 'lists';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('list_name, is_dynamic, client_id', 'required'),
			array('list_name', 'length', 'max'=>100),
			array('is_dynamic', 'length', 'max'=>10),
			array('client_id', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('list_id, list_name, is_dynamic, client_id', 'safe', 'on'=>'search'),
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
			'criterias' => array(self::HAS_MANY, 'Criteria', 'list_id'),
			'listsContacts' => array(self::HAS_MANY, 'ListsContacts', 'list_id'),
			'steps' => array(self::HAS_MANY, 'Steps', 'list_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'list_id' => 'List',
			'list_name' => 'List Name',
			'is_dynamic' => 'Is Dynamic',
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

		$criteria->compare('list_id',$this->list_id,true);
		$criteria->compare('list_name',$this->list_name,true);
		$criteria->compare('is_dynamic',$this->is_dynamic,true);
		$criteria->compare('client_id',$this->client_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}