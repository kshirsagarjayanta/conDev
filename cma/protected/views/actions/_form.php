<?php
/* @var $this ActionsController */
/* @var $model Actions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'action_name'); ?>
		<?php echo $form->textField($model,'action_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'action_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action_type'); ?>
		<?php echo $form->textField($model,'action_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'action_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'step_id'); ?>
		<?php echo $form->textField($model,'step_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'step_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->