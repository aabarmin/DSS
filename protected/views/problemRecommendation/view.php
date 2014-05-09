<?php
$this->breadcrumbs=array(
	'Problem Recommendations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Создать ProblemRecommendation','url'=>array('create')),
	array('label'=>'Редактировать ProblemRecommendation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить ProblemRecommendation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ProblemRecommendation','url'=>array('admin')),
);
?>

<h1>View ProblemRecommendation #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'problem_id',
		'recomendation_comment',
	),
)); ?>
