<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Редактировать проект','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить проекта','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление проектами','url'=>array('admin')),
);
?>

<h1><?php echo $model->project_title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_title',
		'project_status_id',
		'project_type_id',
		'project_size_id',
	),
)); ?>
