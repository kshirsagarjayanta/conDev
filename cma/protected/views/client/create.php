<?php
/* @var $this ClientController */
/* @var $model Client */

// $this->breadcrumbs=array(
// 	'Clients'=>array('index'),
// 	'Create',
// );

// $this->menu=array(
// 	array('label'=>'List Client', 'url'=>array('index')),
// 	array('label'=>'Manage Client', 'url'=>array('admin')),
// );
?>

<h1>Client Registration</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'method' => 'POST',
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'client_id'); ?>
	<div class="row">
		<div class="tabular_row">
			<?php echo $form->labelEx($model,'client_name'); ?>
			<?php echo $form->textField($model,'client_name'); ?>
		</div>
		<?php echo $form->error($model,'client_name'); ?>
	</div>
	<div class="row">
		<div class="tabular_row">
			<?php echo $form->labelEx($model,'website_url'); ?>
			<?php echo $form->textField($model,'website_url', array("placeholder" => "(e.g. - cma.com)")); ?>
		</div>
		<?php echo $form->error($model,'website_url'); ?>
	</div>
	<div class="row">
		<div class = "tabular_row">
			<?php echo $form->labelEx($model,'login_id'); ?>
			<?php echo $form->textField($model,'login_id'); ?>
		</div>
		<?php echo $form->error($model,'login_id'); ?>
	</div>
	<div class="row">
		<div class = "tabular_row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password'); ?>
		</div>
		<?php echo $form->error($model,'password'); ?>
	</div>
	<div class="row">
		<div class = "tabular_row">
			<?php echo $form->labelEx($model,'passwordrepeat'); ?>
			<?php echo $form->passwordField($model,'passwordrepeat'); ?>
		</div>
		<?php echo $form->error($model,'passwordrepeat'); ?>
	</div>
	<div class="row">
		<div class = "tabular_row">
			<?php echo $form->labelEx($model,'contact_number'); ?>
			<?php echo $form->textField($model,'contact_number'); ?>
		</div>
		<?php echo $form->error($model,'contact_number'); ?>
	</div>
	<br /><br /><br /><br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('id'=>'clientSave')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
$(document).ready(function(){
	$('#clientSave').click(function(event){
		event.preventDefault();
		$.ajax({
			'url': '<?php echo Yii::app()->createAbsoluteUrl("client/Register")?>',
			'type': 'POST',
			'data': $('#client-form').serialize(),
			'datatype': 'JSON',
			'success': function(data){
				try{
					data = JSON.parse(data);
					if(data.status == "SUCCESS"){
						alert(data.msg);
						window.location = data.redirection;
					}
					else if(data.status == "ERROR"){
						if(typeof data.msg === 'object'){
							var text = "";
							for(var d in data.msg){
								text += data.msg[d] + "\n";
								$('#client-form_es_ ul').empty().append("<li>" + data.msg[d] + "</li>");
							}
						}
						//alert(text);
						$('#client-form_es_').show();
					}
				}
				catch(Exception){
					console.log(data);
					alert(data);
				}
			},
			'error': function(data){
				console.log(data);
			}
		});
	});
});

</script>
