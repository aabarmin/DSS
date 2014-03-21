<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_title')); ?>:</b>
	<?php echo CHtml::encode($data->project_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_cost')); ?>:</b>
	<?php echo CHtml::encode($data->project_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_start')); ?>:</b>
	<?php echo CHtml::encode($data->project_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_finish')); ?>:</b>
	<?php echo CHtml::encode($data->project_finish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_status_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_status_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_type_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('project_size_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_size_id); ?>
	<br />

	*/ ?>

</div>