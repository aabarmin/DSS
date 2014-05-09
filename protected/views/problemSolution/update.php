<?php
$this->breadcrumbs=array(
	'Problem Solutions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label'=>'Назад','url'=>array('/problem/view/', 'id' => $model->problem_id)),
);
?>

<h1>Редактирование решения</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>