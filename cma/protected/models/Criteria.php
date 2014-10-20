<?php

/**
 * This is the model class for table "criteria".
 *
 * The followings are the available columns in table 'criteria':
 * @property string $criteria_id
 * @property string $prop_name
 * @property string $operator
 * @property string $prop_val
 * @property string $list_id
 *
 * The followings are the available model relations:
 * @property Lists $list
 */
class Criteria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Criteria the static model class
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
		return 'criteria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prop_name, operator, prop_val, list_id', 'required'),
			array('prop_name, prop_val', 'length', 'max'=>100),
			array('operator', 'length', 'max'=>200),
			array('list_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('criteria_id, prop_name, operator, prop_val, list_id', 'safe', 'on'=>'search'),
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
			'list' => array(self::BELONGS_TO, 'Lists', 'list_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'criteria_id' => 'Criteria',
			'prop_name' => 'Prop Name',
			'operator' => 'Operator',
			'prop_val' => 'Prop Val',
			'list_id' => 'List',
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

		$criteria->compare('criteria_id',$this->criteria_id,true);
		$criteria->compare('prop_name',$this->prop_name,true);
		$criteria->compare('operator',$this->operator,true);
		$criteria->compare('prop_val',$this->prop_val,true);
		$criteria->compare('list_id',$this->list_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}