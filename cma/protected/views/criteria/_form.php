<?php
/* @var $this CriteriaController */
/* @var $model Criteria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'criteria-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_name'); ?>
		<?php echo $form->textField($model,'prop_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'prop_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operator'); ?>
		<?php echo $form->textField($model,'operator',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'operator'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_val'); ?>
		<?php echo $form->textField($model,'prop_val',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'prop_val'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'list_id'); ?>
		<?php echo $form->textField($model,'list_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'list_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->