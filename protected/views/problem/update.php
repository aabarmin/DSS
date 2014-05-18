<?php
$this->breadcrumbs=array(
	'Problems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label'=>'Назад','url'=>array('admin'), 'active'=>true),
    array('label'=>'Добавить проблему','url'=>array('create'),'itemOptions' => array('class' => 'dss-inactive-menu')),
);
?>

<h1>Редактирование проблемы <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>