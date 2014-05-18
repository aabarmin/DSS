<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Создать таксономию','url'=>array('create'), 'active'=>true),
); ?>

<h1>Управление таксономиями</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'taxonomy-grid',
	'dataProvider'=>$model->search(),
    'summaryText' => '',
	'columns'=>array(
		'id',
		'title',
		'alias',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
