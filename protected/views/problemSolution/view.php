<?php
$this->breadcrumbs=array(
	'Problem Solutions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Создать ProblemSolution','url'=>array('create')),
	array('label'=>'Редактировать ProblemSolution','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить ProblemSolution','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ProblemSolution','url'=>array('admin')),
);
?>

<h1>View ProblemSolution #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'problem_id',
		'solution_comment',
	),
)); ?>
