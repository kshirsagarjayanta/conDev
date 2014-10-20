<?php
/* @var $this FormsController */
/* @var $data Forms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->form_id), array('view', 'id'=>$data->form_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('form_name')); ?>:</b>
	<?php echo CHtml::encode($data->form_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />


</div>