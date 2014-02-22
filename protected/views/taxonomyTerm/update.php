<?php
$this->breadcrumbs=array(
	'Taxonomy Terms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TaxonomyTerm','url'=>array('index')),
	array('label'=>'Create TaxonomyTerm','url'=>array('create')),
	array('label'=>'View TaxonomyTerm','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage TaxonomyTerm','url'=>array('admin')),
);
?>

<h1>Update TaxonomyTerm <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>