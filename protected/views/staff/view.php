<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Добавить сотрудника','url'=>array('create')),
	array('label'=>'Редактировать сотрудника','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить сотрудника','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление сотрудниками','url'=>array('admin')),
);
?>

<h1>Просмотр сотрудника <?php echo $model->staff_first_name." ".$model->staff_last_name; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staff_first_name',
		'staff_middle_name',
		'staff_last_name',
		'staff_phone',
		'staff_email',
		'staff_post_id',
		'staff_is_external',
	),
)); ?>
