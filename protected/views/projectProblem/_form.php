<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'project-problem-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->hiddenField($model,'project_id',array('class'=>'span5')); ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "problem_type"
        ));
        echo $form->dropDownListRow($model, 'problem_type_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "problem_priority"
        ));
        echo $form->dropDownListRow($model, 'problem_priority_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

	<?php echo $form->textAreaRow($model,'problem_comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
