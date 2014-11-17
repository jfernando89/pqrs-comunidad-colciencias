<?php
/* @var $this GACController */
/* @var $this RespuestaFormController */
/* @var $model RespuestaForm */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'GAC'=>array('/gAC'),
	'CrearRespuesta',
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'RespuestaForm')); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pqrs',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'pqrs',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'tipoPQRS',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'tipoPQRS',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expediente',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'expediente',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'asunto',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'asunto',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serie',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'serie',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'subserie',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'subserie',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dependencia',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'dependencia',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'modoRecepcion',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'modoRecepcion',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtema',array('class'=>'span-5')); ?>
		<?php echo $form->textField($model,'subtema',array('readonly'=>'readonly')); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'plantilla',array('class'=>'span-5')); ?>
		<?php echo $form->dropDownList($model,'plantilla',$plantillas, array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('devolverTextoPlantilla'),
                'update'=>'#' . CHtml::activeId($model, 'texto')
            ), 'prompt'=>' '
        )); ?>
		<?php echo $form->error($model,'plantilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto',array('class'=>'span-5')); ?>
		<?php echo $form->textarea($model,'texto',array('maxlength' => 1000, 'rows' => 5, 'cols' => 118)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="clear"></div>

	<div class="row buttons centered">
		<?php echo CHtml::submitButton('Responder', array( 'class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
