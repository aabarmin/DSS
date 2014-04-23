<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->staff_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->staff_middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->staff_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_phone')); ?>:</b>
	<?php echo CHtml::encode($data->staff_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_email')); ?>:</b>
	<?php echo CHtml::encode($data->staff_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_post_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_post_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_is_external')); ?>:</b>
	<?php echo CHtml::encode($data->staff_is_external); ?>
	<br />

	*/ ?>

</div>