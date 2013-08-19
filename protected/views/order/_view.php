<?php
/* @var $this OrderController */
/* @var $data Order */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->orderId), array('view', 'id'=>$data->orderId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderTime')); ?>:</b>
	<?php echo CHtml::encode($data->orderTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eMail')); ?>:</b>
	<?php echo CHtml::encode($data->eMail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webSite')); ?>:</b>
	<?php echo CHtml::encode($data->webSite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('club')); ?>:</b>
	<?php echo CHtml::encode($data->club); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientType')); ?>:</b>
	<?php echo CHtml::encode($data->clientType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('articleId')); ?>:</b>
	<?php echo CHtml::encode($data->articleId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material')); ?>:</b>
	<?php echo CHtml::encode($data->material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('collar')); ?>:</b>
	<?php echo CHtml::encode($data->collar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font')); ?>:</b>
	<?php echo CHtml::encode($data->font); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>

</div>