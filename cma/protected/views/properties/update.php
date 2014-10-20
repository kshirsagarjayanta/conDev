<?php
/* @var $this PropertiesController */
/* @var $model Properties */

$this->breadcrumbs=array(
	'Properties'=>array('index'),
	$model->prop_id=>array('view','id'=>$model->prop_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Properties', 'url'=>array('index')),
	array('label'=>'Create Properties', 'url'=>array('create')),
	array('label'=>'View Properties', 'url'=>array('view', 'id'=>$model->prop_id)),
	array('label'=>'Manage Properties', 'url'=>array('admin')),
);
?>

<h1>Update Properties <?php echo $model->prop_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>