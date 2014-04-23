<?php
$this->breadcrumbs=array(
	'Project Problem Solutions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить ProjectProblemSolution','url'=>array('create')),
	array('label'=>'Просмотреть ProjectProblemSolution','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление ProjectProblemSolution','url'=>array('admin')),
);
?>

<h1>Редактировани ProjectProblemSolution <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>