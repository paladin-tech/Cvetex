<?php
/* @var $this OrderController */
/* @var $model Order */

$this->breadcrumbs=array(
	'Orders'=>array('index'),
	$model->name=>array('view','id'=>$model->orderId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Order', 'url'=>array('index')),
	array('label'=>'Create Order', 'url'=>array('create')),
	array('label'=>'View Order', 'url'=>array('view', 'id'=>$model->orderId)),
	array('label'=>'Manage Order', 'url'=>array('admin')),
);
?>

<h1>Update Order <?php echo $model->orderId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>