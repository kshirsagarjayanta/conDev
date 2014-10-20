<?php
/* @var $this StepsController */
/* @var $data Steps */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('step_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->step_id), array('view', 'id'=>$data->step_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('step_name')); ?>:</b>
	<?php echo CHtml::encode($data->step_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::encode($data->list_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delay_days')); ?>:</b>
	<?php echo CHtml::encode($data->delay_days); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delay_hours')); ?>:</b>
	<?php echo CHtml::encode($data->delay_hours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delay_mins')); ?>:</b>
	<?php echo CHtml::encode($data->delay_mins); ?>
	<br />


</div>