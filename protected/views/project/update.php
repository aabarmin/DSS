<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Назад','url'=>array('admin'),'active'=>true),
);
?>

<h1>Редактирование проекта <?php echo $model->project_title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>