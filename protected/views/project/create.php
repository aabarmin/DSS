<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Назад','url'=>array('admin'), 'active'=>true),
);
?>

<h1>Создание проекта</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>