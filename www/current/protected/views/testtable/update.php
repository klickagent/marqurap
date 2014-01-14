<?php
/* @var $this TesttableController */
/* @var $model Testtable */

$this->breadcrumbs=array(
	'Testtables'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Testtable', 'url'=>array('index')),
	array('label'=>'Create Testtable', 'url'=>array('create')),
	array('label'=>'View Testtable', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Testtable', 'url'=>array('admin')),
);
?>

<h1>Update Testtable <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>