<?php
/* @var $this ClientController */
/* @var $model Client */

$this->breadcrumbs=array(
	'Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Client', 'url'=>array('index')),
	array('label'=>'Manage Client', 'url'=>array('admin')),
);
?>

<h1>Client Registration</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registration-form',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
	//'clientOptions'=>array(
	//	'validateOnSubmit'=>true,
	//),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'client_name'); ?>
		<?php echo $form->textField($model,'client_name'); ?>
		<?php echo $form->error($model,'client_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'website_url'); ?>
		<?php echo $form->textField($model,'website_url'); ?>
		<?php echo $form->error($model,'website_url'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'contact_number'); ?>
		<?php echo $form->textField($model,'contact_number'); ?>
		<?php echo $form->error($model,'contact_number'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'client_name'); ?>
		<?php echo $form->textField($model,'client_name'); ?>
		<?php echo $form->error($model,'client_name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<label>Re-enter password</label>
		<input type="password" name='re-password' />
	</div>
	<div class="row">
		<label id="passerror" style="color:red;"></label>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
	$(document).ready(function(){
		$('input[name="Client[password]"], input[name="re-password"]').change(function(){
			ValidatePass('input[name="Client[password]"]', 'input[name="Client[password]"]');
		});
		$('registration-form').submit(function(){
			ValidatePass('input[name="Client[password]"]', 'input[name="Client[password]"]');
		});
	});
	function ValidatePass(input1, input2){
		var pass1 = $('input[name="Client[password]"]').val().trim();
		var pass2 = $('input[name="re-password"]').val().trim();
		if(pass1 == "" || pass2 == ""){
			return;
		}
		if(pass1 != pass2){
			$('#passerror').text("Passwords do not match. Please same passwords in Password & Re-enter password fields.");
			return false;
		}
		else{
			$('#passerror').text("");
			return true;
		}
	}
</script>