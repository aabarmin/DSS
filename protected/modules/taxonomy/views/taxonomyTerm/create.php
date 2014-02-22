<?php
$this->breadcrumbs=array(
	'Taxonomy Terms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TaxonomyTerm','url'=>array('index')),
	array('label'=>'Manage TaxonomyTerm','url'=>array('admin')),
);
?>

<h1>Create TaxonomyTerm</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>