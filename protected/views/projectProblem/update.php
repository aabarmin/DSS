<?php
$this->breadcrumbs=array(
	'Project Problems'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить ProjectProblem','url'=>array('create')),
	array('label'=>'Просмотреть ProjectProblem','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление ProjectProblem','url'=>array('admin')),
);
?>

<h1>Редактировани ProjectProblem <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>