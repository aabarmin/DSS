<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Создать таксономию','url'=>array('create')),
	array('label'=>'Редактировать таксономию','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить таксономию','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление таксономиями','url'=>array('admin')),

    array('label' => 'Добавить термин', 'url' => array('taxonomyTerm/create', 'id' => $model->id))
);
?>

<h1><?php echo $model->title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
	),
)); ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered',
    'dataProvider' => new CActiveDataProvider('TaxonomyTerm', array(
        'criteria' => array(
            'condition' => 'taxonomy_id='.$model->id,
            'order' => 'term_name asc'
        ),
        'countCriteria' => array(
            'condition' => 'taxonomy_id='.$model->id,
        ),
        'pagination'=>array(
            'pageSize'=>20,
        ),
    )),
    'columns' => array(
        'term_name',
        'term_alias',
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'buttons' => array(
                'view' => array(
                    'visible' => 'false'
                ),
                'update' => array(
                    'url' => 'Yii::app()->controller->createUrl("taxonomyTerm/update", array("id"=>$data->primaryKey))'
                ),
                'delete' => array(
                    'url' => 'Yii::app()->controller->createUrl("taxonomyTerm/delete", array("id"=>$data->primaryKey))'
                )
            )
        )
    )
)); ?>