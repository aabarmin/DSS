<?php
$this->breadcrumbs=array(
	'Problems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить Problem','url'=>array('create')),
	array('label'=>'Просмотреть Problem','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление Problem','url'=>array('admin')),
);
?>

<h1>Редактирование проблемы <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>