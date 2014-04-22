<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление таксономиями','url'=>array('admin')),
);
?>

<h1>Создание таксономии</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>