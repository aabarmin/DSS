<?php
$this->breadcrumbs=array(
	'ProblemSolutions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Добавить решение','url'=>array('/problemSolution/create'), 'active'=>true),
	array('label'=>'Добавить рекомендацию','url'=>array('/problemRecommendation/create')),
);
?>

<h1>Решения и рекомендации</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'problem-grid',
	'dataProvider'=> new CArrayDataProvider(
	    $model->getSolutionsAndRecomendations(),
	    array(
	        'pagination' => array(
	            'pageSize' => 20
	        )
	    )
	),
    'summaryText' => '',
	'columns'=>array(
        array(
            'name' => 'Тип',
            'value' => function($data, $row){
                    if (get_class($data) == "ProblemSolution") {
                        return "Решение";
                    }
                    return "Рекомендация";
                },
            'type' => 'raw'
        ),
        array(
            'name' => 'Наименование',
            'value' => function($data, $row){
                if (get_class($data) == "ProblemSolution") {
                    return $data->solution_comment;
                }
                return $data->recomendation_comment;
            },
            'type' => 'raw'
        ),
        array(
            'name' => 'Проект',
            'value' => function($data, $row){
                $result = array();
                foreach ($data->problems as $problem) {
                    foreach ($problem->projects as $project) {
                        $result[] = $project->project_title;
                    }
                }
                if (count($result) == 0) {
                    return "Без проекта";
                }
                return implode(", ", $result);
            },
            'type' => 'raw'
        ),
        array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl' => function($data, $row){
			    if (get_class($data) == "ProblemSolution") {
			        return Yii::app()->createUrl("/problemSolution/view", array("id" => $data->id));
			    } else {
			        return Yii::app()->createUrl("/problemRecommendation/view", array("id" => $data->id));
			    }
			},
			'updateButtonUrl' => function($data, $row){
			    if (get_class($data) == "ProblemSolution") {
			        return Yii::app()->createUrl("/problemSolution/update", array("id" => $data->id));
			    } else {
			        return Yii::app()->createUrl("/problemRecommendation/update", array("id" => $data->id));
			    }
			},
			'deleteButtonUrl' => function($data, $row){
			    if (get_class($data) == "ProblemSolution") {
			        return Yii::app()->createUrl("/problemSolution/delete", array("id" => $data->id));
			    } else {
			        return Yii::app()->createUrl("/problemRecommendation/delete", array("id" => $data->id));
			    }
			}
		),
	),
)); ?>