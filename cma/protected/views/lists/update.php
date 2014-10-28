<?php
/* @var $this ListsController */
/* @var $model Lists */

$this->breadcrumbs=array(
	'Lists'=>array('index'),
	$model->list_id=>array('view','id'=>$model->list_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lists', 'url'=>array('index')),
	array('label'=>'Create Lists', 'url'=>array('create')),
	array('label'=>'View Lists', 'url'=>array('view', 'id'=>$model->list_id)),
	array('label'=>'Manage Lists', 'url'=>array('admin')),
	array('label'=>'Create Criteria', 'url'=>array('createCriteria', 'id'=>$model->list_id)),
);
?>

<h1>Update Lists <?php echo $model->list_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>