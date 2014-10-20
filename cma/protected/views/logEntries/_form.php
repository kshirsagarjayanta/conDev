<?php
/* @var $this LogEntriesController */
/* @var $model LogEntries */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'log-entries-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'page_name_visited'); ?>
		<?php echo $form->textField($model,'page_name_visited',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'page_name_visited'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'form_submitted'); ?>
		<?php echo $form->textField($model,'form_submitted',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'form_submitted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'visit_time'); ?>
		<?php echo $form->textField($model,'visit_time'); ?>
		<?php echo $form->error($model,'visit_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->textField($model,'client_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'client_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact_id'); ?>
		<?php echo $form->textField($model,'contact_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'contact_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->