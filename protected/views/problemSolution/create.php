<?php
$this->breadcrumbs=array(
	'Problem Solutions'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'Назад','url'=>array('/problem/view/', 'id' => $model->problem_id)),
);
?>

<h1>Добавление решения</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>