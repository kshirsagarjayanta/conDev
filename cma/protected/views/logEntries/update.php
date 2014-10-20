<?php
/* @var $this LogEntriesController */
/* @var $model LogEntries */

$this->breadcrumbs=array(
	'Log Entries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LogEntries', 'url'=>array('index')),
	array('label'=>'Create LogEntries', 'url'=>array('create')),
	array('label'=>'View LogEntries', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LogEntries', 'url'=>array('admin')),
);
?>

<h1>Update LogEntries <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>