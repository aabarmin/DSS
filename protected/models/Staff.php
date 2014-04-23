<?php

/**
 * This is the model class for table "{{staff}}".
 *
 * The followings are the available columns in table '{{staff}}':
 * @property string $id
 * @property string $staff_first_name
 * @property string $staff_middle_name
 * @property string $staff_last_name
 * @property string $staff_phone
 * @property string $staff_email
 * @property integer $staff_post_id
 * @property integer $staff_is_external
 */
class Staff extends CActiveRecord
{
    public function getFullName()
    {
        return $this->staff_first_name.' '.$this->staff_last_name;
    }

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{staff}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('staff_post_id, staff_is_external', 'numerical', 'integerOnly'=>true),
			array('staff_first_name, staff_middle_name, staff_last_name, staff_phone, staff_email', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, staff_first_name, staff_middle_name, staff_last_name, staff_phone, staff_email, staff_post_id, staff_is_external', 'safe', 'on'=>'search'),

            array('staff_first_name, staff_last_name, staff_email', 'required'),
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
			'id' => 'ID',
			'staff_first_name' => 'Фамилия',
			'staff_middle_name' => 'Отчество',
			'staff_last_name' => 'Имя',
			'staff_phone' => 'Телефон',
			'staff_email' => 'EMail',
			'staff_post_id' => 'Должность',
			'staff_is_external' => 'Внешний',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('staff_first_name',$this->staff_first_name,true);
		$criteria->compare('staff_middle_name',$this->staff_middle_name,true);
		$criteria->compare('staff_last_name',$this->staff_last_name,true);
		$criteria->compare('staff_phone',$this->staff_phone,true);
		$criteria->compare('staff_email',$this->staff_email,true);
		$criteria->compare('staff_post_id',$this->staff_post_id);
		$criteria->compare('staff_is_external',$this->staff_is_external);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Staff the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
