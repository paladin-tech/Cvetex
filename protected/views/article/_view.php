<?php
/* @var $this ArticleController */
/* @var $data Article */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('articleId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->articleId), array('view', 'id'=>$data->articleId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articleName')); ?>:</b>
	<?php echo CHtml::encode($data->articleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sportId')); ?>:</b>
	<?php echo CHtml::encode($data->sportId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sizes')); ?>:</b>
	<?php echo CHtml::encode($data->sizes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('techCharacteristics')); ?>:</b>
	<?php echo CHtml::encode($data->techCharacteristics); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collarType')); ?>:</b>
	<?php echo CHtml::encode($data->collarType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zipper')); ?>:</b>
	<?php echo CHtml::encode($data->zipper); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sex')); ?>:</b>
	<?php echo CHtml::encode($data->sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colors')); ?>:</b>
	<?php echo CHtml::encode($data->colors); ?>
	<br />

	*/ ?>

</div>