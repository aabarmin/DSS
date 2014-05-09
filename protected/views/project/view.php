<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Редактировать проект','url'=>array('update','id'=>$model->id)),
	array('label'=>'Удалить проект','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление проектами','url'=>array('admin')),
);
?>

<h1><?php echo $model->project_title; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'project_title',
		array(
            'label' => 'Статус проекта',
            'value' => !is_null($model->status) ? $model->status->term_name : "",
            'type' => 'raw'
        ),
        array(
            'label' => 'Вид проекта',
            'value' => !is_null($model->type) ? $model->type->term_name : "",
            'type' => 'raw'
        ),
        array(
            'label' => 'Размер проекта',
            'value' => !is_null($model->size) ? $model->size->term_name : "",
            'type' => 'raw'
        ),
	),
)); ?>

<?php echo CHtml::tag("div", array("class" => "box")); ?>
    <?php echo CHtml::tag("div", array("class" => "box-header")); ?>
        <h2>Команда проекта</h2>
    <?php echo CHtml::closeTag("div"); ?>
    <?php echo CHtml::tag("div", array("class" => "box-content")); ?>
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'project_team',
            'dataProvider' => new CArrayDataProvider($model->team),
            'columns' => array(
                array(
                    'name' => 'Участник',
                    'value' => '$data->staff_first_name." ".$data->staff_last_name'
                )
            )
        ));
        ?>
    <?php echo CHtml::closeTag("div"); ?>
<?php echo CHtml::closeTag("div"); ?>

<?php echo CHtml::tag("div", array("class" => "box")); ?>
    <?php echo CHtml::tag("div", array("class" => "box-header")); ?>
        <h2>Файлы</h2>
    <?php echo CHtml::closeTag("div"); ?>
    <?php echo CHtml::tag("div", array("class" => "box-content")); ?>
        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>false,
            'items'=> array(
                array(
                    'label' => 'Добавить файл',
                    'url' => array(
                        '/projectAttachment/create',
                        'id' => $model->id
                    )
                )
            ),

        )); ?>

        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'project_files',
            'dataProvider' => new CArrayDataProvider($model->attachments),
            'columns' => array(
                array(
                    'name' => 'Вложение',
                    'value' => 'CHtml::link($data->attach_title, Yii::getPathOfAlias("application.data.uploads")."/".$data->attach_file)',
                    'type' => 'html'
                )
            )
        )); ?>
    <?php echo CHtml::closeTag("div"); ?>
<?php echo CHtml::closeTag("div"); ?>

<?php echo CHtml::tag("div", array("class" => "box")); ?>
    <?php echo CHtml::tag("div", array("class" => "box-header")); ?>
        <h2>Проблемы</h2>
    <?php echo CHtml::closeTag("div"); ?>
    <?php echo CHtml::tag("div", array("class" => "box-content")); ?>
        <?php $this->widget('bootstrap.widgets.TbMenu', array(
            'type'=>'pills',
            'stacked'=>false,
            'items'=> array(
                array(
                    'label' => 'Добавить проблему',
                    'url' => array(
                        '/projectProblem/create',
                        'id' => $model->id
                    )
                )
            ),
        )); ?>

        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'id' => 'project_problems',
            'dataProvider' => new CArrayDataProvider($model->problems),
            'columns' => array(
                array(
                    'name' => 'Комментарий',
                    'value' => 'CHtml::link(substr($data->problem_comment, 0, 250), Yii::app()->createUrl("problem/view", array("id" => $data->id)))',
                    'type' => 'raw'
                ),
                array(
                    'name' => 'Тип проблемы',
                    'value' => '!is_null($data->type)? $data->type->term_name : ""'
                ),
                array(
                    'name' => 'Приоритет',
                    'value' => '!is_null($data->priority)? $data->priority->term_name : ""'
                )
            )
        )); ?>
    <?php echo CHtml::closeTag("div"); ?>
<?php echo CHtml::closeTag("div"); ?>