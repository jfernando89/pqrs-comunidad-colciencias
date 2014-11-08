<?php
/* @var $this RadicarPQRSFormController */
/* @var $model RadicarPQRSForm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'radicar-pqrsform-RadicarPQRS-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPQRS'); ?>
		<?php echo $form->textField($model,'tipoPQRS'); ?>
		<?php echo $form->error($model,'tipoPQRS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoId'); ?>
		<?php echo $form->textField($model,'tipoId'); ?>
		<?php echo $form->error($model,'tipoId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres'); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApelldio'); ?>
		<?php echo $form->textField($model,'primerApelldio'); ?>
		<?php echo $form->error($model,'primerApelldio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido'); ?>
		<?php echo $form->error($model,'segundoApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->textField($model,'correo'); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php echo $form->textField($model,'nit'); ?>
		<?php echo $form->error($model,'nit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreEmpresa'); ?>
		<?php echo $form->textField($model,'nombreEmpresa'); ?>
		<?php echo $form->error($model,'nombreEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccionEmpresa'); ?>
		<?php echo $form->textField($model,'direccionEmpresa'); ?>
		<?php echo $form->error($model,'direccionEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoEmpresa'); ?>
		<?php echo $form->textField($model,'telefonoEmpresa'); ?>
		<?php echo $form->error($model,'telefonoEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correoEmpresa'); ?>
		<?php echo $form->textField($model,'correoEmpresa'); ?>
		<?php echo $form->error($model,'correoEmpresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreContacto'); ?>
		<?php echo $form->textField($model,'nombreContacto'); ?>
		<?php echo $form->error($model,'nombreContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellidoContacto'); ?>
		<?php echo $form->textField($model,'primerApellidoContacto'); ?>
		<?php echo $form->error($model,'primerApellidoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellidoContacto'); ?>
		<?php echo $form->textField($model,'segundoApellidoContacto'); ?>
		<?php echo $form->error($model,'segundoApellidoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonoContacto'); ?>
		<?php echo $form->textField($model,'telefonoContacto'); ?>
		<?php echo $form->error($model,'telefonoContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais'); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->textField($model,'departamento'); ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad'); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependencia'); ?>
		<?php echo $form->textField($model,'dependencia'); ?>
		<?php echo $form->error($model,'dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modeRecepcion'); ?>
		<?php echo $form->textField($model,'modeRecepcion'); ?>
		<?php echo $form->error($model,'modeRecepcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tema'); ?>
		<?php echo $form->textField($model,'tema'); ?>
		<?php echo $form->error($model,'tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtema'); ?>
		<?php echo $form->textField($model,'subtema'); ?>
		<?php echo $form->error($model,'subtema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folios'); ?>
		<?php echo $form->textField($model,'folios'); ?>
		<?php echo $form->error($model,'folios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anexos'); ?>
		<?php echo $form->textField($model,'anexos'); ?>
		<?php echo $form->error($model,'anexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoAnexos'); ?>
		<?php echo $form->textField($model,'tipoAnexos'); ?>
		<?php echo $form->error($model,'tipoAnexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asunto'); ?>
		<?php echo $form->textField($model,'asunto'); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->