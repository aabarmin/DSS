<?php $form=$this->beginWidget('dss.widgets.DSSActiveForm',array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'project_title',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'project_cost',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dateFieldRow($model,'project_start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_finish',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_status_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_type_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'project_size_id',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
