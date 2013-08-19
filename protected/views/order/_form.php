<?php
/* @var $this OrderController */
/* @var $model Order */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-form',
	'enableAjaxValidation'=>false,
)); ?>
	<?= $form->hiddenField($model, 'articleId', array('value' => $articleId)) ?>
	<?= $form->hiddenField($model, 'colors', array('value' => implode(':', $colors))) ?>
<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
	<div id="orderFormLeft">
		<div class="orderFormTitle">MODEL</div>
		<div id="orderFormModelImageContainer">
			<div>
				<div class="orderFormModelChosenColors">C1: <?= $colors[0] ?></div>
				<div class="orderFormModelChosenColors">C2: <?= $colors[1] ?></div>
				<div class="orderFormModelChosenColors">C3: <?= $colors[2] ?></div>
				<div class="orderFormModelChosenColors">FC: <?= $colors[3] ?></div>
				<div class="orderFormModelChosenColors">OC: <?= $colors[4] ?></div>
			</div>
			<div class="clear"></div>
			<div id="LB-Front" class="orderFormModelImage">
				<a href="imagesKit/target-<?= $articleId ?>-<?= implode($colors, '-') ?>-front-big.jpg" id="3DKitImageLightboxFront" rel="lightbox" title="3D Kit"><img id="3DKitImageFront" src="imagesKit/target-<?= $articleId ?>-<?= implode($colors, '-') ?>-front-small.jpg"></a>
			</div>
			<div id="LB-Back" class="orderFormModelImage" style="display: none">
				<a href="imagesKit/target-<?= $articleId ?>-<?= implode($colors, '-') ?>-rear-big.jpg" id="3DKitImageLightboxBack" rel="lightbox" title="3D Kit"><img id="3DKitImageBack" src="imagesKit/target-<?= $articleId ?>-<?= implode($colors, '-') ?>-rear-small.jpg"></a>
			</div>
			<div>CLICK ON IMAGE TO VIEW LARGE</div>
			<div class="infoNav" id="switchFront">FRONT</div>
			<div class="infoNav" id="switchBack">BACK</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="orderFormRight">
	<?php echo $form->errorSummary($model); ?>
		<div class="orderFormTitle">ORDERING FORM</div>
		<div class="orderFormFieldSet">

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'name'); ?>
				<?php echo $form->textField($model, 'name', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'name'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'eMail'); ?>
				<?php echo $form->textField($model, 'eMail', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'eMail'); ?>
			</div>
			<div class="clear"></div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'phone'); ?>
				<?php echo $form->textField($model, 'phone', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'phone'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'webSite'); ?>
				<?php echo $form->textField($model, 'webSite', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'webSite'); ?>
			</div>
			<div class="clear"></div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'city'); ?>
				<?php echo $form->textField($model, 'city', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'city'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'country'); ?>
				<?php echo $form->textField($model, 'country', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'country'); ?>
			</div>
			<div class="clear"></div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model, 'club'); ?>
				<?php echo $form->textField($model, 'club', array('size' => 30, 'maxlength' => 200)); ?>
				<?php echo $form->error($model, 'club'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'clientType'); ?>
				<?php echo $form->dropDownList($model,'clientType',array('individual' => 'Individual', 'company' => 'Company')); ?>
				<?php echo $form->error($model,'clientType'); ?>
			</div>
			<div class="clear"></div>
		</div>

		<div class="orderFormFieldSet">

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'size'); ?>
				<?php echo $form->dropDownList($model,'size',array('Size1' => 'Size1', 'Size2' => 'Size2', 'Size3' => 'Size3')); ?>
				<?php echo $form->error($model,'size'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'material'); ?>
				<?php echo $form->dropDownList($model,'material',array('Material1' => 'Material1', 'Material2' => 'Material2', 'Material3' => 'Material3')); ?>
				<?php echo $form->error($model,'material'); ?>
			</div>
			<div class="clear"></div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'collar'); ?>
				<?php echo $form->dropDownList($model,'collar',array('Collar1' => 'Collar1', 'Collar2' => 'Collar2', 'Collar3' => 'Collar3')); ?>
				<?php echo $form->error($model,'collar'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'quantity'); ?>
				<?php echo $form->textField($model,'quantity'); ?>
				<?php echo $form->error($model,'quantity'); ?>
			</div>
			<div class="clear"></div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'font'); ?>
				<?php echo $form->dropDownList($model,'font',array('Font1' => 'Font1', 'Font2' => 'Font2', 'Font3' => 'Font3')); ?>
				<?php echo $form->error($model,'font'); ?>
			</div>

			<div class="row floatLeft">
				<?php echo $form->labelEx($model,'note'); ?>
				<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($model,'note'); ?>
			</div>
			<div class="clear"></div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			</div>
		</div>
	</div>
	<div class="clear"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
$(document).ready(function() {
	$('#switchFront').click(function() {
		$('#LB-Front').show();
		$('#LB-Back').hide();
	});
	$('#switchBack').click(function() {
		$('#LB-Front').hide();
		$('#LB-Back').show();
	});
});
</script>