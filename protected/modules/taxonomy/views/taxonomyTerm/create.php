<?php
$this->breadcrumbs=array(
	'Taxonomy Terms'=>array('index'),
	'Create',
);
?>

<h1>Добавление термина</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>