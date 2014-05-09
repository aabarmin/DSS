<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('problem_id')); ?>:</b>
	<?php echo CHtml::encode($data->problem_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recomendation_comment')); ?>:</b>
	<?php echo CHtml::encode($data->recomendation_comment); ?>
	<br />


</div>