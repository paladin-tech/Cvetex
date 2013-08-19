<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-orderForm-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
<div>
	<div class="row">
		<?php echo $form->labelEx($model,'articleId'); ?>
		<?php echo $form->textField($model,'articleId'); ?>
		<?php echo $form->error($model,'articleId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'eMail'); ?>
		<?php echo $form->textField($model,'eMail'); ?>
		<?php echo $form->error($model,'eMail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone'); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webSite'); ?>
		<?php echo $form->textField($model,'webSite'); ?>
		<?php echo $form->error($model,'webSite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city'); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'club'); ?>
		<?php echo $form->textField($model,'club'); ?>
		<?php echo $form->error($model,'club'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size'); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'material'); ?>
		<?php echo $form->textField($model,'material'); ?>
		<?php echo $form->error($model,'material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'collar'); ?>
		<?php echo $form->textField($model,'collar'); ?>
		<?php echo $form->error($model,'collar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font'); ?>
		<?php echo $form->textField($model,'font'); ?>
		<?php echo $form->error($model,'font'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientType'); ?>
		<?php echo $form->textField($model,'clientType'); ?>
		<?php echo $form->error($model,'clientType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderTime'); ?>
		<?php echo $form->textField($model,'orderTime'); ?>
		<?php echo $form->error($model,'orderTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note'); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- form -->