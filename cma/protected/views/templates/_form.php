<?php
/* @var $this TemplatesController */
/* @var $model Templates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'templates-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'template_name'); ?>
		<?php echo $form->textField($model,'template_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'template_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'template_html'); ?>
		<?php echo $form->textField($model,'template_html',array('size'=>60,'maxlength'=>2000)); ?>
		<?php echo $form->error($model,'template_html'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->