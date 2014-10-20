<?php
/* @var $this CriteriaController */
/* @var $model Criteria */

$this->breadcrumbs=array(
	'Criterias'=>array('index'),
	$model->criteria_id,
);

$this->menu=array(
	array('label'=>'List Criteria', 'url'=>array('index')),
	array('label'=>'Create Criteria', 'url'=>array('create')),
	array('label'=>'Update Criteria', 'url'=>array('update', 'id'=>$model->criteria_id)),
	array('label'=>'Delete Criteria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->criteria_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Criteria', 'url'=>array('admin')),
);
?>

<h1>View Criteria #<?php echo $model->criteria_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'criteria_id',
		'prop_name',
		'operator',
		'prop_val',
		'list_id',
	),
)); ?>
