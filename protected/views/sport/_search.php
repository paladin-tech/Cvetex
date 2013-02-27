<?php
/* @var $this SportController */
/* @var $model Sport */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sportId'); ?>
		<?php echo $form->textField($model,'sportId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sportName'); ?>
		<?php echo $form->textField($model,'sportName',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->