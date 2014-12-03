<?php
/* @var $this EnvioFormController */
/* @var $model EnvioForm */
/* @var $form CActiveForm */
?>

<h1>Crear Envío</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'EnvioForm')); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pqrs',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'pqrs',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'respuesta',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'respuesta',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medio',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->dropDownList($model,'medio',$medios); ?></span>
		<?php echo $form->error($model,'medio'); ?>

		<?php echo $form->labelEx($model,'zona',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->dropDownList($model,'zona',$zonas); ?></span>
		<?php echo $form->error($model,'zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->dropDownList($model,'tipo',$tipos); ?></span>
		<?php echo $form->error($model,'tipo'); ?>

		<?php echo $form->labelEx($model,'guia',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'guia'); ?></span>
		<?php echo $form->error($model,'guia'); ?>
	</div>

	<div class="clear"></div>
	
	<div class="row buttons centered">
		<?php echo CHtml::submitButton('Enviar', array( 'class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->