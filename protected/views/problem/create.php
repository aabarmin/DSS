<?php
$this->breadcrumbs=array(
	'Problems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Назад','url'=>array('admin'), 'active'=>true),
);
?>

<h1>Добавление проблемы</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>