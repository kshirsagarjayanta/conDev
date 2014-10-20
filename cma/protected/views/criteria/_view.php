<?php
/* @var $this CriteriaController */
/* @var $data Criteria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('criteria_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->criteria_id), array('view', 'id'=>$data->criteria_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_name')); ?>:</b>
	<?php echo CHtml::encode($data->prop_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operator')); ?>:</b>
	<?php echo CHtml::encode($data->operator); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_val')); ?>:</b>
	<?php echo CHtml::encode($data->prop_val); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::encode($data->list_id); ?>
	<br />


</div>