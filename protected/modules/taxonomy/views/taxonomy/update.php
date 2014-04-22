<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Управление таксономиями','url'=>array('admin')),
);
?>

<h1>Редактирование таксономии <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>