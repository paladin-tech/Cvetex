<?php
/* @var $this ArticleController */
/* @var $model Article */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'articleName'); ?>
		<?php echo $form->textField($model,'articleName',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'articleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sportId'); ?>
        <?php echo $form->dropDownList($model, 'sportId', $model->getSports()); ?>
		<?php echo $form->error($model,'sportId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sizes'); ?>
		<?php echo $form->textField($model,'sizes',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'sizes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'techCharacteristics'); ?>
		<?php echo $form->textField($model,'techCharacteristics',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'techCharacteristics'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collarType'); ?>
		<?php echo $form->textField($model,'collarType',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'collarType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipper'); ?>
		<?php echo $form->textField($model,'zipper'); ?>
		<?php echo $form->error($model,'zipper'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sex'); ?>
		<?php echo $form->textField($model,'sex',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colors'); ?>
		<?php echo $form->textField($model,'colors',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'colors'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->