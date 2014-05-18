<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Управление справочниками','url'=>array('admin'), 'active'=>true),
);
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>