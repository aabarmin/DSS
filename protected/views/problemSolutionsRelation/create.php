<?php
$this->breadcrumbs=array(
	'Problem Solutions Relations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление ProblemSolutionsRelation','url'=>array('admin')),
);
?>

<h1>Добавление ProblemSolutionsRelation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>