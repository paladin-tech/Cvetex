<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orderId'); ?>
		<?php echo $form->textField($model,'orderId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderTime'); ?>
		<?php echo $form->textField($model,'orderTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'eMail'); ?>
		<?php echo $form->textField($model,'eMail',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webSite'); ?>
		<?php echo $form->textField($model,'webSite',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'club'); ?>
		<?php echo $form->textField($model,'club',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientType'); ?>
		<?php echo $form->textField($model,'clientType',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articleId'); ?>
		<?php echo $form->textField($model,'articleId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'material',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'collar'); ?>
		<?php echo $form->textField($model,'collar',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'font'); ?>
		<?php echo $form->textField($model,'font',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->