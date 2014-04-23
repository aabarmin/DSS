<?php $form=$this->beginWidget('dss.widgets.DSSActiveForm',array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Поля, отмеченные <span class="required">*</span> обязательны для заполнения.</p>



	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textAreaRow($model,'project_title',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "project_status"
        ));
        echo $form->dropDownListRow($model, 'project_status_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

    <?php
        echo $form->label($model, "team");
        echo $form->listBox($model, "team",
            CHtml::listData(Staff::model()->findAllByAttributes(array(
                'staff_is_external' => '0'
            )), "id", "fullname"),
            array(
                "multiple" => "multiple"
            )
        );
        echo $form->error($model, "team");
    ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "project_type"
        ));
        echo $form->dropDownListRow($model, 'project_type_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "project_cost"
        ));
        echo $form->dropDownListRow($model, 'project_cost_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

    <?php
        $tax = Taxonomy::model()->findByAttributes(array(
            "alias" => "project_length"
        ));
        echo $form->dropDownListRow($model, 'project_length_id',
            CHtml::listData($tax->terms, "id", "term_name"), array(
            "prompt" => "Выберите из списка..."
        ));
    ?>

    <?php echo $form->dropDownListRow($model, 'project_stakeholder_id',
        CHtml::listData(Staff::model()->findAllByAttributes(array(
            'staff_is_external' => '1'
        )), "id", 'fullname'),
        array('prompt' => 'Выберите из списка...')
    ); ?>

    <?php echo $form->dropDownListRow($model, 'project_manager_id',
        CHtml::listData(Staff::model()->findAll(), "id", 'fullname'),
        array('prompt' => 'Выберите из списка...')
    ); ?>

    <?php echo $form->dropDownListRow($model, 'project_foreign_manager_id',
        CHtml::listData(Staff::model()->findAllByAttributes(array(
            'staff_is_external' => '1'
        )), "id", 'fullname'),
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
