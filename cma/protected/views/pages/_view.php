<?php
/* @var $this PagesController */
/* @var $data Pages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->page_id), array('view', 'id'=>$data->page_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_name')); ?>:</b>
	<?php echo CHtml::encode($data->page_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('page_url')); ?>:</b>
	<?php echo CHtml::encode($data->page_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('client_id')); ?>:</b>
	<?php echo CHtml::encode($data->client_id); ?>
	<br />


</div>