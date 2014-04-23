<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'staff-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'staff_first_name',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'staff_last_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'staff_middle_name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'staff_phone',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'staff_email',array('class'=>'span5','maxlength'=>255)); ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "staff_post"
        ));
        echo $form->dropDownListRow($model, 'staff_post_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

	<?php echo $form->checkBoxRow($model,'staff_is_external',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
