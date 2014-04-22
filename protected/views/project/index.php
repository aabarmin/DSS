<?php
$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Добавить проект','url'=>array('create')),
	array('label'=>'Управление проектами','url'=>array('admin')),
);
?>

<h1>Проекты</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
