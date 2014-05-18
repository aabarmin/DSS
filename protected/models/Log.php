<?php

/**
 * This is the model class for table "{{log}}".
 *
 * The followings are the available columns in table '{{log}}':
 * @property string $id
 * @property string $user_name
 * @property string $controller_action
 * @property string $controller_name
 * @property string $created
 */
class Log extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{log}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_name, controller_action, controller_name', 'length', 'max'=>255),
			array('created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_name, controller_action, controller_name, created', 'safe', 'on'=>'search'),
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
			'user_name' => 'User Name',
			'controller_action' => 'Controller Action',
			'controller_name' => 'Controller Name',
			'created' => 'Created',
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
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('controller_action',$this->controller_action,true);
		$criteria->compare('controller_name',$this->controller_name,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Log the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function getLogString() {
        $output = "Пользователь ".$this->user_name." ";
        $objectName = substr($this->controller_name, 0, strpos($this->controller_name, "Controller"));
        $actions = array(
            'admin' => 'просмотрел список',
            'index' => 'просмотрел список',
            'view' => 'просмотрел',
            'create' => 'добавил',
            'update' => 'отредактировал',
            'delete' => 'удалил',
            'page' => 'просмотрел страницу'
        );
        $types = array(
            'Site' => array(
                'ip' => 'страница',
                'rp' => 'стрниц',
                'vp' => 'страницу'
            ),
            'Project' => array(
                'ip' => 'проект',
                'rp' => 'проектов',
                'vp' => 'проект'
            )
        );
        if (array_key_exists($this->controller_action, $actions)) {
            $output .= $actions[$this->controller_action]." ";
        } else {
            $output .= $this->controller_action." ";
        }
        $typeStr = "";
        if (array_key_exists($objectName, $types)) {
            $typeArr = $types[$objectName];
            if ($this->controller_action == "index" || $this->controller_action == 'admin') {
                if (array_key_exists('rp', $typeArr)) {
                    $typeStr = $typeArr['rp'];
                }
            } elseif ($this->controller_action == 'view' ||
                $this->controller_action == 'create' ||
                $this->controller_action == 'update' ||
                $this->controller_action == 'delete') {

                if (array_key_exists('vp', $typeArr)) {
                    $typeStr = $typeArr['vp'];
                }
            }
        }
        if ($typeStr == "") {
            $output .= $objectName;
        } else {
            $output .= $typeStr;
        }

        return $output;
    }
}
