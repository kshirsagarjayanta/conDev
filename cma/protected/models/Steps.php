<?php

/**
 * This is the model class for table "steps".
 *
 * The followings are the available columns in table 'steps':
 * @property string $step_id
 * @property string $step_name
 * @property string $list_id
 * @property string $delay_days
 * @property string $delay_hours
 * @property string $delay_mins
 *
 * The followings are the available model relations:
 * @property Actions[] $actions
 * @property Lists $list
 */
class Steps extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Steps the static model class
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
		return 'steps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('step_name, list_id, delay_days, delay_hours, delay_mins', 'required'),
			array('step_name', 'length', 'max'=>100),
			array('list_id, delay_days, delay_hours, delay_mins', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('step_id, step_name, list_id, delay_days, delay_hours, delay_mins', 'safe', 'on'=>'search'),
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
			'actions' => array(self::HAS_MANY, 'Actions', 'step_id'),
			'list' => array(self::BELONGS_TO, 'Lists', 'list_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'step_id' => 'Step',
			'step_name' => 'Step Name',
			'list_id' => 'List',
			'delay_days' => 'Delay Days',
			'delay_hours' => 'Delay Hours',
			'delay_mins' => 'Delay Mins',
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

		$criteria->compare('step_id',$this->step_id,true);
		$criteria->compare('step_name',$this->step_name,true);
		$criteria->compare('list_id',$this->list_id,true);
		$criteria->compare('delay_days',$this->delay_days,true);
		$criteria->compare('delay_hours',$this->delay_hours,true);
		$criteria->compare('delay_mins',$this->delay_mins,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}