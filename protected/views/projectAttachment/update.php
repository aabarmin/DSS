<?php
$this->breadcrumbs=array(
	'Project Attachments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить ProjectAttachment','url'=>array('create')),
	array('label'=>'Просмотреть ProjectAttachment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление ProjectAttachment','url'=>array('admin')),
);
?>

<h1>Редактировани ProjectAttachment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>