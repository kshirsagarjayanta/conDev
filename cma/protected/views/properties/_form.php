<?php
/* @var $this PropertiesController */
/* @var $model Properties */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'properties-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_name'); ?>
		<?php echo $form->textField($model,'prop_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'prop_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_type'); ?>
		<?php echo $form->textField($model,'prop_type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prop_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop_category'); ?>
		<?php echo $form->textField($model,'prop_category',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prop_category'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'client_id'); ?>
		<?php echo $form->hiddenField($model,'client_id',array('size'=>10,'maxlength'=>10, 'value' => Yii::app()->user->getState('client_id'))); ?>
		<?php //echo $form->error($model,'client_id');?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->