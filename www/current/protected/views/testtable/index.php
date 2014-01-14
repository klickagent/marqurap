<?php
/* @var $this TesttableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Testtables',
);

$this->menu=array(
	array('label'=>'Create Testtable', 'url'=>array('create')),
	array('label'=>'Manage Testtable', 'url'=>array('admin')),
);
?>

<h1>Testtables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
