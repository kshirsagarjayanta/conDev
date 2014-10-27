<?php
/* @var $this LogEntriesController */
/* @var $model LogEntries */

$this->breadcrumbs=array(
	'Log Entries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LogEntries', 'url'=>array('index')),
	array('label'=>'Manage LogEntries', 'url'=>array('admin')),
);
?>

<h1>View LogEntries #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page_name_visited',
		'form_submitted',
		'visit_time',
		'client_id',
		'contact_id',
	),
)); ?>
