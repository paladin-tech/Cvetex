<?
echo $colors;
var_dump($selection);
var_dump($orderForm);
die();
?>
<!-- Content -->
<? $form = $this->beginWidget(
	'CActiveForm', array(
		'id' => 'order-form',
		'enableAjaxValidation'   => false,
		'enableClientValidation' => true,
		'clientOptions'          => array(
			'validateOnSubmit' => true,
			'validateOnChange' => true,
			'validateOnType'   => false,
		)
	)
); ?>
<fieldset>
	<ul class="form">
		<div class="title">ORDER FORM</div>
		<div class="alerts_box" id="msgError" style="display: none">
			<div class="alert alert-error"></div>
		</div>
		<?= $form->hiddenField($orderForm, 'step', array('value' => 'formPersonalData')) ?>
		<li>
			<?= $form->labelEx($orderForm, 'email'); ?>
			<?= $form->textField($orderForm, 'email', array('size' => '35')); ?>
			<?= $form->error($orderForm, 'email'); ?>
		</li>
</ul>
</fieldset>

<?= CHtml::submitButton(Yii::t('l10n', 'Reset Form'), array('id'=>'buttonResetPersonalData', 'class'=>'button', 'name' => 'reset')) ?>
<? $this->endWidget(); ?>