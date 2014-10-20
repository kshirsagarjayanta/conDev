<?php
/* @var $this StepsController */
/* @var $model Steps */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'steps-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'step_name'); ?>
		<?php echo $form->textField($model,'step_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'step_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'list_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delay_days'); ?>
		<?php echo $form->textField($model,'delay_days',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'delay_days'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delay_hours'); ?>
		<?php echo $form->textField($model,'delay_hours',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'delay_hours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'delay_mins'); ?>
		<?php echo $form->textField($model,'delay_mins',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'delay_mins'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->