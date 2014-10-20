<?php
/* @var $this ListsController */
/* @var $data Lists */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->list_id), array('view', 'id'=>$data->list_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('list_name')); ?>:</b>
	<?php echo CHtml::encode($data->list_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_dynamic')); ?>:</b>
	<?php echo CHtml::encode($data->is_dynamic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />


</div>