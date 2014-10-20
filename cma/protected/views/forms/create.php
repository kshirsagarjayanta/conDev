<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>Create Forms</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>