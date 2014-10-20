<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->step_id,
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'Update Steps', 'url'=>array('update', 'id'=>$model->step_id)),
	array('label'=>'Delete Steps', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->step_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<h1>View Steps #<?php echo $model->step_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'step_id',
		'step_name',
		'list_id',
		'delay_days',
		'delay_hours',
		'delay_mins',
	),
)); ?>
