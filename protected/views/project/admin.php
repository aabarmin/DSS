<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Добавить проект','url'=>array('create')),
); ?>

<h1>Управление проектами</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'project-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'project_title',
		array(
            'name' => 'project_status_id',
            'value' => '$data->status->term_name'
        ),
		/*
		'project_type_id',
		'project_size_id',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
