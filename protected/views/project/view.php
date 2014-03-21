<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Project','url'=>array('index')),
	array('label'=>'Create Project','url'=>array('create')),
	array('label'=>'Update Project','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Project','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Project','url'=>array('admin')),
);
?>

<h1>View Project #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'project_title',
		'project_cost',
		'project_start',
		'project_finish',
		'project_status_id',
		'project_type_id',
		'project_size_id',
	),
)); ?>
