<?php
$this->breadcrumbs=array(
	'Project Problems'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Создать ProjectProblem','url'=>array('create')),
	array('label'=>'Редактировать ProjectProblem','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить ProjectProblem','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ProjectProblem','url'=>array('admin')),
);
?>

<h1>Просмотр проблемы #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_id',
		'problem_type_id',
		'problem_priority_id',
		'problem_comment',
	),
)); ?>
