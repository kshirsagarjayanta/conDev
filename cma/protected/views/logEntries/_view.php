<?php
/* @var $this LogEntriesController */
/* @var $data LogEntries */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name_visited')); ?>:</b>
	<?php echo CHtml::encode($data->page_name_visited); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_submitted')); ?>:</b>
	<?php echo CHtml::encode($data->form_submitted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visit_time')); ?>:</b>
	<?php echo CHtml::encode($data->visit_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_id')); ?>:</b>
	<?php echo CHtml::encode($data->contact_id); ?>
	<br />


</div>