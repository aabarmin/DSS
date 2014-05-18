<?php
$this->breadcrumbs=array(
	'Problem Recommendations Relations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление ProblemRecommendationsRelation','url'=>array('admin')),
);
?>

<h1>Добавление ProblemRecommendationsRelation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>