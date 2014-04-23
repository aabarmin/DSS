<?php
$this->breadcrumbs=array(
	'Project Problem Recommendations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'К проблеме','url'=>array('projectProblem/view', 'id' => $model->problem_id)),
	array('label'=>'Редактировать рекомендацию','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить рекомендацию','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Просмотр рекомендации</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
            'label' => 'Проблема',
            'value' => !is_null($model->problem) ? substr($model->problem->problem_comment, 0, 250) : "",
            'type' => 'raw'
        ),
		'recomendation_comment',
	),
)); ?>
