<?php
/* @var $this TemplatesController */
/* @var $data Templates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->template_id), array('view', 'id'=>$data->template_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_name')); ?>:</b>
	<?php echo CHtml::encode($data->template_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template_html')); ?>:</b>
	<?php echo CHtml::encode($data->template_html); ?>
	<br />


</div>