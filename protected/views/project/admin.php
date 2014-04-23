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
		array(
            'name' => 'project_title',
            'value' => 'CHtml::link($data->project_title, Yii::app()->createUrl("project/view", array("id" => $data->id)))',
            'type' => 'raw'
        ),
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
