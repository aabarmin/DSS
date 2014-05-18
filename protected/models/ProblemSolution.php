<?php

/**
 * This is the model class for table "{{problem_solution}}".
 *
 * The followings are the available columns in table '{{problem_solution}}':
 * @property string $id
 * @property integer $problem_id
 * @property string $solution_comment
 */
class ProblemSolution extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{problem_solution}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('problem_id', 'numerical', 'integerOnly'=>true),
			array('solution_comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, problem_id, solution_comment', 'safe', 'on'=>'search'),
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
            'problems' => array(self::MANY_MANY, 'Problem', 'data_problem_solutions(solution_id, problem_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'problem_id' => 'Проблема',
			'solution_comment' => 'Решение',
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
		$criteria->compare('problem_id',$this->problem_id);
		$criteria->compare('solution_comment',$this->solution_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getSolutionsAndRecomendations() {
	    $result = array();
	    
	    $solutions = $this->findAll();
	    $result = array_merge($result, $solutions);
	    
	    $recommendations = ProblemRecommendation::model()->findAll();
	    $result = array_merge($result, $recommendations);
	    
	    return $result;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProblemSolution the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
