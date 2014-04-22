<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
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