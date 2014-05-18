<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Управление справочниками','url'=>array('admin'),'active'=>true),
);
?>

<h1>Редактирование справочника <?php echo $model->title; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>