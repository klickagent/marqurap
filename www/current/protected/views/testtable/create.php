<?php
/* @var $this TesttableController */
/* @var $model Testtable */

$this->breadcrumbs=array(
	'Testtables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Testtable', 'url'=>array('index')),
	array('label'=>'Manage Testtable', 'url'=>array('admin')),
);
?>

<h1>Create Testtable</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>