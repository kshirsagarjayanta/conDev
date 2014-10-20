<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	$model->prop_id,
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
	array('label'=>'Create Properties', 'url'=>array('create')),
	array('label'=>'Update Properties', 'url'=>array('update', 'id'=>$model->prop_id)),
	array('label'=>'Delete Properties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->prop_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Properties', 'url'=>array('admin')),
);
?>

<h1>View Properties #<?php echo $model->prop_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'prop_id',
		'prop_name',
		'prop_type',
		'prop_category',
		'client_id',
	),
)); ?>
