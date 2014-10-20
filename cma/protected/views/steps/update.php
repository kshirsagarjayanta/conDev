<?php
/* @var $this StepsController */
/* @var $model Steps */

$this->breadcrumbs=array(
	'Steps'=>array('index'),
	$model->step_id=>array('view','id'=>$model->step_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Steps', 'url'=>array('index')),
	array('label'=>'Create Steps', 'url'=>array('create')),
	array('label'=>'View Steps', 'url'=>array('view', 'id'=>$model->step_id)),
	array('label'=>'Manage Steps', 'url'=>array('admin')),
);
?>

<h1>Update Steps <?php echo $model->step_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>