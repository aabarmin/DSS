<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'problem-solutions-relation-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->hiddenField($model,'problem_id',array('class'=>'span5')); ?>

    <?php echo $form->dropDownListRow($model, 'solution_id',
        CHtml::listData(ProblemSolution::model()->findAll(), "id", 'solution_comment'),
        array('prompt' => 'Выберите из списка...')
    ); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Создать' : 'Сохранить',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
