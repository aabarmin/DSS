<?php
$this->breadcrumbs=array(
	'Problem Solutions Relations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить ProblemSolutionsRelation','url'=>array('create')),
	array('label'=>'Просмотреть ProblemSolutionsRelation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление ProblemSolutionsRelation','url'=>array('admin')),
);
?>

<h1>Редактировани ProblemSolutionsRelation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>