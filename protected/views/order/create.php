<?php
/* @var $this OrderController */
/* @var $model Order */

//$this->breadcrumbs=array(
//	'Orders'=>array('index'),
//	'Create',
//);

//$this->menu=array(
//	array('label'=>'List Order', 'url'=>array('index')),
//	array('label'=>'Manage Order', 'url'=>array('admin')),
//);
?>
<div id="content">
	<h1>Create Order</h1>

	<?php echo $this->renderPartial('_form', array('model' => $model, 'colors' => $colors, 'articleId' => $articleId)); ?>
</div>