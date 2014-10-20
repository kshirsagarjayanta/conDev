<?php

/**
 * This is the model class for table "templates".
 *
 * The followings are the available columns in table 'templates':
 * @property string $template_id
 * @property string $template_name
 * @property string $template_html
 */
class Templates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Templates the static model class
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
		return 'templates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('template_name, template_html', 'required'),
			array('template_name', 'length', 'max'=>200),
			array('template_html', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('template_id, template_name, template_html', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'template_id' => 'Template',
			'template_name' => 'Template Name',
			'template_html' => 'Template Html',
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

		$criteria->compare('template_id',$this->template_id,true);
		$criteria->compare('template_name',$this->template_name,true);
		$criteria->compare('template_html',$this->template_html,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}