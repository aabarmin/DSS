<?php
$this->breadcrumbs=array(
	'Project Problem Solutions'=>array('index'),
	'Create',
);

$this->menu=array(
    array('label'=>'К проблеме','url'=>array('projectProblem/view', 'id' => $model->problem_id)),
);
?>

<h1>Добавление решения</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>