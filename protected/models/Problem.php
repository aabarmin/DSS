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
            'recommendations' => array(self::MANY_MANY, 'ProblemRecommendation', 'data_problem_recommendations(problem_id, recommendation_id)'),
            'solutions' => array(self::MANY_MANY, 'ProblemSolution', 'data_problem_solutions(problem_id, solution_id)'),
            'projects' => array(self::MANY_MANY, "Project", "data_project_problem(problem_id, project_id)")
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

    public function statisticSolutions()
    {
        $withSolution = 0;
        $withoutSolution = 0;

        foreach ($this->findAll() as $problem) {
            if (count($problem->solutions) == 0) {
                $withoutSolution++;
            } else {
                $withSolution++;
            }
        }
        return array(
            array(
                'label' => 'Без решения',
                'data' => $withoutSolution
            ),
            array(
                'label' => 'С решением',
                'data' => $withSolution
            )
        );
    }

    public function statisticProblemsLast()
    {
        $today = new DateTime();

        $objects = Yii::app()->db->createCommand()
            ->select("
                count(id) as cnt,
	            month(created) as date_m,
	            day(created) as date_d,
	            concat(day(created), '.', month(created)) as date_full")
            ->from('data_problem')
            ->group('date_full')
            ->where('created IS NOT NULL AND created > DATE_SUB(curdate(), INTERVAL 2 WEEK)')
            ->queryAll();

        // исходно размечаем массив
        $data = array();
        for ($i = 0; $i < 14; $i++) {
            $date = $today->modify('-'.$i.' day');
            $data[$date->format("j.n")] = 0;
        }
        // добавляем полученные данные
        foreach ($objects as $object) {
            $date = $object['date_full'];
            if (array_key_exists($date, $data)) {
                $data[$date]++;
            }
        }
        // результирующий массив
        $result = array();
        foreach ($data as $key=>$value) {
            $result[] = array(
                $key,
                $value
            );
        }

        return $result;
    }
    public function statisticRecommendationsSolutionsLast()
    {
        $today = new DateTime();

        // исходно размечаем массив
        $data = array();
        for ($i = 0; $i < 14; $i++) {
            $date = $today->modify('-'.$i.' day');
            $data[$date->format("j.n")] = 0;
        }
        // решения
        $objects = Yii::app()->db->createCommand()
            ->select("
                count(id) as cnt,
	            month(created) as date_m,
	            day(created) as date_d,
	            concat(day(created), '.', month(created)) as date_full")
            ->from('data_problem_solution')
            ->group('date_full')
            ->where('created IS NOT NULL AND created > DATE_SUB(curdate(), INTERVAL 2 WEEK)')
            ->queryAll();

        // добавляем полученные данные
        foreach ($objects as $object) {
            $date = $object['date_full'];
            if (array_key_exists($date, $data)) {
                $data[$date]++;
            }
        }

        // рекомендации
        // решения
        $objects = Yii::app()->db->createCommand()
            ->select("
                count(id) as cnt,
	            month(created) as date_m,
	            day(created) as date_d,
	            concat(day(created), '.', month(created)) as date_full")
            ->from('data_problem_recommendation')
            ->group('date_full')
            ->where('created IS NOT NULL AND created > DATE_SUB(curdate(), INTERVAL 2 WEEK)')
            ->queryAll();

        // добавляем полученные данные
        foreach ($objects as $object) {
            $date = $object['date_full'];
            if (array_key_exists($date, $data)) {
                $data[$date]++;
            }
        }

        // результирующий массив
        $result = array();
        foreach ($data as $key=>$value) {
            $result[] = array(
                $key,
                $value
            );
        }

        return $result;
    }
}
