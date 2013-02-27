<?php
/* @var $this SportController */
/* @var $model Sport */

$this->breadcrumbs=array(
	'Sports'=>array('index'),
	$model->sportId=>array('view','id'=>$model->sportId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sport', 'url'=>array('index')),
	array('label'=>'Create Sport', 'url'=>array('create')),
	array('label'=>'View Sport', 'url'=>array('view', 'id'=>$model->sportId)),
	array('label'=>'Manage Sport', 'url'=>array('admin')),
);
?>

<h1>Update Sport <?php echo $model->sportId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>