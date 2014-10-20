<?php
/* @var $this ListsController */
/* @var $model Lists */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lists-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'list_name'); ?>
		<?php echo $form->textField($model,'list_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'list_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_dynamic'); ?>
		<?php echo $form->textField($model,'is_dynamic',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'is_dynamic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->textField($model,'client_id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'client_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->