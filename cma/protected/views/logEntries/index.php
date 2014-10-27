<?php
/* @var $this LogEntriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Log Entries',
);

$this->menu=array(
	array('label'=>'Manage LogEntries', 'url'=>array('admin')),
);
?>

<h1>Log Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
