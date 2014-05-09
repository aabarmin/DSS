<?php
$this->breadcrumbs=array(
	'Problems'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Добавить проблему','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('problem-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление проблемами</h1>

<p>
Вы можете использовать операторы сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
или <b>=</b>) в начале каждого указанного для поиска значения.
</p>

<?php echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'problem-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name' => 'problem_comment',
            'value' => 'CHtml::link($data->problem_comment, Yii::app()->createUrl("problem/view", array("id" => $data->id)))',
            'type' => 'raw'
        ),
        array(
            'name' => 'problem_type_id',
            'value' => '$data->type->term_name'
        ),
        array(
            'name' => 'problem_priority_id',
            'value' => '$data->priority->term_name'
        ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
