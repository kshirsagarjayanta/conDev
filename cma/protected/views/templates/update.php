<?php
/* @var $this TemplatesController */
/* @var $model Templates */

$this->breadcrumbs=array(
	'Templates'=>array('index'),
	$model->template_id=>array('view','id'=>$model->template_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Templates', 'url'=>array('index')),
	array('label'=>'Create Templates', 'url'=>array('create')),
	array('label'=>'View Templates', 'url'=>array('view', 'id'=>$model->template_id)),
	array('label'=>'Manage Templates', 'url'=>array('admin')),
);
?>

<h1>Update Templates <?php echo $model->template_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>