<?php
$this->breadcrumbs=array(
	'Taxonomy Terms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TaxonomyTerm','url'=>array('index')),
	array('label'=>'Create TaxonomyTerm','url'=>array('create')),
	array('label'=>'Update TaxonomyTerm','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete TaxonomyTerm','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaxonomyTerm','url'=>array('admin')),
);
?>

<h1>View TaxonomyTerm #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'taxonomy_id',
		'term_name',
		'term_alias',
	),
)); ?>
