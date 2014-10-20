<?php
/* @var $this PropertiesController */
/* @var $data Properties */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->prop_id), array('view', 'id'=>$data->prop_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_name')); ?>:</b>
	<?php echo CHtml::encode($data->prop_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_type')); ?>:</b>
	<?php echo CHtml::encode($data->prop_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop_category')); ?>:</b>
	<?php echo CHtml::encode($data->prop_category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />


</div>