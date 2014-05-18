<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Добавить сотрудника','url'=>array('create'), 'active'=>true),
);
?>

<h1>Управление сотрудниками</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'staff-grid',
	'dataProvider'=>$model->search(),
    'summaryText' => '',
	'columns'=>array(
		'id',
		'staff_first_name',
		'staff_middle_name',
		'staff_last_name',
		'staff_phone',
		'staff_email',
		/*
		'staff_post_id',
		'staff_is_external',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
