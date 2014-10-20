<?php
/* @var $this FormsController */
/* @var $model Forms */

$this->breadcrumbs=array(
	'Forms'=>array('index'),
	$model->form_id=>array('view','id'=>$model->form_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Forms', 'url'=>array('index')),
	array('label'=>'Create Forms', 'url'=>array('create')),
	array('label'=>'View Forms', 'url'=>array('view', 'id'=>$model->form_id)),
	array('label'=>'Manage Forms', 'url'=>array('admin')),
);
?>

<h1>Update Forms <?php echo $model->form_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>