<?php
$this->breadcrumbs=array(
	'Problem Recommendations Relations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Добавить ProblemRecommendationsRelation','url'=>array('create')),
	array('label'=>'Просмотреть ProblemRecommendationsRelation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Управление ProblemRecommendationsRelation','url'=>array('admin')),
);
?>

<h1>Редактировани ProblemRecommendationsRelation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>