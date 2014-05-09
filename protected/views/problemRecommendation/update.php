<?php
$this->breadcrumbs=array(
	'Problem Recommendations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label'=>'Назад','url'=>array('/problem/view/', 'id' => $model->problem_id)),
);
?>

<h1>Редактировани ProblemRecommendation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>