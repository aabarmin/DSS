<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_type_id')); ?>:</b>
	<?php echo CHtml::encode($data->problem_type_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_priority_id')); ?>:</b>
	<?php echo CHtml::encode($data->problem_priority_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_comment')); ?>:</b>
	<?php echo CHtml::encode($data->problem_comment); ?>
	<br />


</div>