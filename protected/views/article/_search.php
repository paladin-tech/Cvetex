<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'articleId'); ?>
		<?php echo $form->textField($model,'articleId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'articleName'); ?>
		<?php echo $form->textField($model,'articleName',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sportId'); ?>
		<?php echo $form->textField($model,'sportId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sizes'); ?>
		<?php echo $form->textField($model,'sizes',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'techCharacteristics'); ?>
		<?php echo $form->textField($model,'techCharacteristics',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'collarType'); ?>
		<?php echo $form->textField($model,'collarType',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zipper'); ?>
		<?php echo $form->textField($model,'zipper'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colors'); ?>
		<?php echo $form->textField($model,'colors',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->