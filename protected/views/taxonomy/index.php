<?php
$this->breadcrumbs=array(
	'Taxonomies',
);

$this->menu=array(
	array('label'=>'Create Taxonomy','url'=>array('create')),
	array('label'=>'Manage Taxonomy','url'=>array('admin')),
);
?>

<h1>Taxonomies</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
