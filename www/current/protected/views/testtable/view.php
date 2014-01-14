<?php
/* @var $this TesttableController */
/* @var $model Testtable */

$this->breadcrumbs=array(
	'Testtables'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Testtable', 'url'=>array('index')),
	array('label'=>'Create Testtable', 'url'=>array('create')),
	array('label'=>'Update Testtable', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Testtable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Testtable', 'url'=>array('admin')),
);
?>

<h1>View Testtable #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
