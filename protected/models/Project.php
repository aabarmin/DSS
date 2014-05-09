<?php

/**
 * This is the model class for table "{{project}}".
 *
 * The followings are the available columns in table '{{project}}':
 * @property string $id
 * @property string $project_title
 * @property string $project_start
 * @property string $project_finish
 * @property integer $project_status_id
 * @property integer $project_type_id
 * @property integer $project_size_id
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{project}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_status_id, project_type_id, project_size_id', 'numerical', 'integerOnly'=>true),
			array('project_title', 'safe'),

            array("project_title", "required"),
            array("project_status_id", "required"),
            array("project_stakeholder_id", "required"),
            // array("project_type_id", "required"),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, project_title, project_status_id, project_type_id, project_size_id', 'safe', 'on'=>'search'),
		);
	}

    public function behaviors() {
        return array('CAdvancedArBehavior' => array(
            'class' => 'application.extensions.CAdvancedArBehavior')
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
            "status" => array(self::BELONGS_TO, "TaxonomyTerm", "project_status_id"),
            'type' => array(self::BELONGS_TO, 'TaxonomyTerm', 'project_type_id'),
            'size' => array(self::BELONGS_TO, 'TaxonomyTerm', 'project_size_id'),
            'cost' => array(self::BELONGS_TO, 'TaxonomyTerm', 'project_cost_id'),
            "team" => array(self::MANY_MANY, "Staff", "data_project_team(project_id, staff_id)"),
            'attachments' => array(self::HAS_MANY, 'ProjectAttachment', 'project_id'),
            'problems' => array(self::MANY_MANY, "Problem", "data_project_problem(project_id, problem_id)")
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_title' => 'Наименование проекта',
			'project_status_id' => 'Статус проекта',
			'project_type_id' => 'Вид проекта',
			'project_size_id' => 'Размер проекта',
            'project_length_id' => 'Длительность проекта',
            'project_cost_id' => 'Стоимость проекта',
            'project_stakeholder_id' => 'Заказчик',
            'project_manager_id' => 'Руководитель проекта',
            'project_foreign_manager_id' => 'Руководитель проекта от заказчика',
            'team' => 'Команда проекта',
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
        /*
		$criteria->compare('id',$this->id,true);
		$criteria->compare('project_title',$this->project_title,true);
		$criteria->compare('project_start',$this->project_start,true);
		$criteria->compare('project_finish',$this->project_finish,true);
		$criteria->compare('project_status_id',$this->project_status_id);
		$criteria->compare('project_type_id',$this->project_type_id);
		$criteria->compare('project_size_id',$this->project_size_id);
        */

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
