<?php
$this->breadcrumbs=array(
	'Project Attachments'=>array('index'),
	'Create',
);
?>

<h1>Добавление вложения</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>