<?php
/* @var $this RadicarPQRSFormController */
/* @var $model RadicarPQRSForm */
/* @var $form CActiveForm */
?>

<h1>Radicar PQRS</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'radicarPQRS')); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoPQRS',array('class'=>'tipoPQRS span-5')); ?>
		<?php echo $form->textField($model,'tipoPQRS',array('readonly'=>'readonly')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoId',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'tipoId',array('readonly'=>'readonly')); ?></span>

	<?php if( $model->tipoId != 'NIT' ) { ?>
				<?php echo $form->labelEx($model,'id',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'id',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'nombres',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'nombres',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'primerApelldio',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'primerApelldio',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'segundoApellido',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'segundoApellido',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'direccion',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'direccion',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'telefono',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'telefono',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'correo',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'correo',array('readonly'=>'readonly')); ?></span>
			</div>
	<?php }
		  else {
	?>
				<?php echo $form->labelEx($model,'nit',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'nit',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'nombreEmpresa',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'nombreEmpresa',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'direccionEmpresa',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'direccionEmpresa',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'telefonoEmpresa',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'telefonoEmpresa',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'correoEmpresa',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'correoEmpresa',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'nombreContacto',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'nombreContacto',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'primerApellidoContacto',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'primerApellidoContacto',array('readonly'=>'readonly')); ?></span>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'segundoApellidoContacto',array('class'=>'span-5')); ?>
				<span class="span-6"><?php echo $form->textField($model,'segundoApellidoContacto',array('readonly'=>'readonly')); ?></span>

				<?php echo $form->labelEx($model,'telefonoContacto',array('class'=>'span-5')); ?>
				<span class="span-5"><?php echo $form->textField($model,'telefonoContacto',array('readonly'=>'readonly')); ?></span>
			</div>
	<?php  }
	?>

	<div class="row">
		<?php echo $form->labelEx($model,'pais',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'pais',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'departamento',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'departamento',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'ciudad',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'dependencia',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'dependencia',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modoRecepcion',array('class'=>'span-5')); ?>
		<?php echo $form->textField($model,'modoRecepcion',array('readonly'=>'readonly')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'tema',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->dropDownList($model,'tema',$temas, array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('listaSubtemas'),
                'update'=>'#' . CHtml::activeId($model, 'subtema')
            ), 'prompt'=>' '
        )); ?></span>
		<?php echo $form->error($model,'tema'); ?>
	
		<?php echo $form->labelEx($model,'subtema',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->dropDownList($model,'subtema',$subtemas); ?></span>
		<?php echo $form->error($model,'subtema'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'folios',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'folios'); ?></span>
		<?php echo $form->error($model,'folios'); ?>
	
		<?php echo $form->labelEx($model,'anexos',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'anexos'); ?></span>
		<?php echo $form->error($model,'anexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoAnexos',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'tipoAnexos'); ?></span>
		<?php echo $form->error($model,'tipoAnexos'); ?>
	
		<?php echo $form->labelEx($model,'asunto',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'asunto'); ?></span>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="clear"></div>
	
	<div class="row buttons centered">
		<?php echo CHtml::resetButton('Cancelar', array( 'class'=>'buttonPQR')); ?>
		<?php echo CHtml::submitButton('Radicar',array('class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->