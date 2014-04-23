<?php
$this->breadcrumbs=array(
	'Project Attachments'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Создать ProjectAttachment','url'=>array('create')),
	array('label'=>'Редактировать ProjectAttachment','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить ProjectAttachment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление ProjectAttachment','url'=>array('admin')),
);
?>

<h1>View ProjectAttachment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_id',
		'attach_title',
		'attach_file',
	),
)); ?>
