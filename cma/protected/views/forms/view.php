<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->form_id,
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Create Forms', 'url'=>array('create')),
	array('label'=>'Update Forms', 'url'=>array('update', 'id'=>$model->form_id)),
	array('label'=>'Delete Forms', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->form_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>View Forms #<?php echo $model->form_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'form_id',
		'form_name',
		'client_id',
	),
)); ?>
