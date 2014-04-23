<?php
$this->breadcrumbs=array(
	'Project Problem Recommendations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProjectProblemRecommendation','url'=>array('index')),
	array('label'=>'Create ProjectProblemRecommendation','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('project-problem-recommendation-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Project Problem Recommendations</h1>

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
	'id'=>'project-problem-recommendation-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'problem_id',
		'recomendation_comment',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
