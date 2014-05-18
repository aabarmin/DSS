<?php
$this->breadcrumbs=array(
	'Problem Recommendations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Назад','url'=>array('/problem/view/', 'id' => $model->problem_id),'active'=>true),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>