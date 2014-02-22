<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxonomy_id')); ?>:</b>
	<?php echo CHtml::encode($data->taxonomy_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term_name')); ?>:</b>
	<?php echo CHtml::encode($data->term_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term_alias')); ?>:</b>
	<?php echo CHtml::encode($data->term_alias); ?>
	<br />


</div>