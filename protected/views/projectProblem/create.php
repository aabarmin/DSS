<?php
$this->breadcrumbs=array(
	'Project Problems'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление ProjectProblem','url'=>array('admin')),
);
?>

<h1>Добавление ProjectProblem</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>