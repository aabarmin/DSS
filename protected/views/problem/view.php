<?php
$this->breadcrumbs=array(
	'Problems'=>array('index'),
	$model->id,
);

$this->menu=array(
    array('label'=>'Назад','url'=>array('admin'),'active'=>true),
	array('label'=>'Редактировать','url'=>array('update','id'=>$model->id),'itemOptions' => array('class' => 'dss-inactive-menu')),
	array('label'=>'Удалить','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'), 'itemOptions' => array('class' => 'dss-delete-menu')),
);
?>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
        array(
            'label' => 'Тип проблемы',
            'value' => !is_null($model->type) ? $model->type->term_name : "",
            'type' => 'raw'
        ),
        array(
            'label' => 'Приоритет проблемы',
            'value' => !is_null($model->priority) ? $model->priority->term_name : "",
            'type' => 'raw'
        ),
		'problem_comment',
	),
)); ?>

<?php echo CHtml::tag("div", array("class" => "box")); ?>
    <?php echo CHtml::tag("div", array("class" => "box-header")); ?>
        <h2>Рекомендации</h2>
    <?php echo CHtml::closeTag("div"); ?>
    <?php echo CHtml::tag("div", array("class" => "box-content")); ?>
        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>false,
            'items'=> array(
                array(
                    'label' => 'Добавить рекомендацию',
                    'url' => array(
                        '/ProblemRecommendationsRelation/create',
                        'id' => $model->id
                    ),
                    'active'=>true
                )
            ),

        )); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'project_team',
            'dataProvider' => new CArrayDataProvider($model->recommendations),
            'hideHeader' => true,
            'summaryText' => '',
            'columns' => array(
                array(
                    'name' => 'Комментарий',
                    'value' => '$data->recomendation_comment'
                )
            )
        ));
        ?>
    <?php echo CHtml::closeTag("div"); ?>
<?php echo CHtml::closeTag("div"); ?>

<?php echo CHtml::tag("div", array("class" => "box")); ?>
    <?php echo CHtml::tag("div", array("class" => "box-header")); ?>
        <h2>Решения</h2>
    <?php echo CHtml::closeTag("div"); ?>
    <?php echo CHtml::tag("div", array("class" => "box-content")); ?>
        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>false,
            'items'=> array(
                array(
                    'label' => 'Добавить решение',
                    'url' => array(
                        '/ProblemSolutionsRelation/create',
                        'id' => $model->id
                    ),
                    'active'=>true
                )
            ),

        )); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'project_team',
            'dataProvider' => new CArrayDataProvider($model->solutions),
            'hideHeader' => true,
            'summaryText' => '',
            'columns' => array(
                array(
                    'name' => 'Комментарий',
                    'value' => '$data->solution_comment'
                )
            )
        ));
        ?>
    <?php echo CHtml::closeTag("div"); ?>
<?php echo CHtml::closeTag("div"); ?>