<?php
$this->breadcrumbs=array(
	'Project Problem Solutions'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('label'=>'К проблеме','url'=>array('projectProblem/view', 'id' => $model->problem_id)),
    array('label'=>'Редактировать решение','url'=>array('update','id'=>$model->id)),
    array('label'=>'Удалить решение','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Просмотр решения</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'problem_id',
		'solution_comment',
	),
)); ?>
