<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление проектами','url'=>array('admin')),
);
?>

<h1>Создание проекта</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>