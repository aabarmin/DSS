<?php
$this->breadcrumbs=array(
	'Staff'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление сотрудниками','url'=>array('admin')),
);
?>

<h1>Добавление сотрудника</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>