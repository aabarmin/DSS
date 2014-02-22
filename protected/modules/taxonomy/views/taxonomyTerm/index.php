<?php
$this->breadcrumbs=array(
	'Taxonomy Terms',
);

$this->menu=array(
	array('label'=>'Create TaxonomyTerm','url'=>array('create')),
	array('label'=>'Manage TaxonomyTerm','url'=>array('admin')),
);
?>

<h1>Taxonomy Terms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
