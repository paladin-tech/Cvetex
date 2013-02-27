<?php
/* @var $this SportController */
/* @var $data Sport */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sportId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sportId), array('view', 'id'=>$data->sportId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sportName')); ?>:</b>
	<?php echo CHtml::encode($data->sportName); ?>
	<br />


</div>