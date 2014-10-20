<?php
/* @var $this LogEntriesController */
/* @var $model LogEntries */

$this->breadcrumbs=array(
	'Log Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LogEntries', 'url'=>array('index')),
	array('label'=>'Manage LogEntries', 'url'=>array('admin')),
);
?>

<h1>Create LogEntries</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>