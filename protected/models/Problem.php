<?php

/**
 * This is the model class for table "{{problem}}".
 *
 * The followings are the available columns in table '{{problem}}':
 * @property string $id
 * @property integer $problem_type_id
 * @property integer $problem_priority_id
 * @property string $problem_comment
 */
class Problem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{problem}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('problem_type_id, problem_priority_id', 'numerical', 'integerOnly'=>true),
			array('problem_comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, problem_type_id, problem_priority_id, problem_comment', 'safe', 'on'=>'search'),

            array('problem_type_id, problem_priority_id, problem_comment', 'required')
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
            'type' => array(self::BELONGS_TO, 'TaxonomyTerm', 'problem_type_id'),
            'priority' => array(self::BELONGS_TO, 'TaxonomyTerm', 'problem_priority_id'),
            'recommendations' => array(self::HAS_MANY, 'ProblemRecommendation', 'problem_id'),
            'solutions' => array(self::HAS_MANY, 'ProblemSolution', 'problem_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'problem_type_id' => 'Тип проблемы',
			'problem_priority_id' => 'Приоритет',
			'problem_comment' => 'Комментарий',
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
		$criteria->compare('problem_type_id',$this->problem_type_id);
		$criteria->compare('problem_priority_id',$this->problem_priority_id);
		$criteria->compare('problem_comment',$this->problem_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Problem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
