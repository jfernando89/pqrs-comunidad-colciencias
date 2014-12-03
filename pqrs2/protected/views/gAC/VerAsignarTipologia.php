<?php
/* @var $this AsignarTipologiaPQRSFormController */
/* @var $model AsignarTipologiaPQRSForm */
/* @var $form CActiveForm */
?>

<script type="text/javascript">
	function borrarSubtema() {
		var subtemas = document.getElementById('AsignarTipologiaPQRSForm_subtema');
		subtemas.innerHTML = '';		
	}
</script>

<h1>Asignar Tipolog&iacute;a</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'guardarAsignarTipologiaPQRSForm',
													'action'=>Yii::app()->createUrl('//GAC/guardarAsignarTipologia'))); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pqrs',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'pqrs',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'tipoPQRS',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'tipoPQRS',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'id',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'dependencia',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'dependencia',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modoRecepcion',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'modoRecepcion',array('readonly'=>'readonly')); ?></span>

		<?php echo $form->labelEx($model,'temaCiudadano',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'temaCiudadano',array('readonly'=>'readonly')); ?></span>
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

		<?php echo $form->labelEx($model,'subtema',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->dropDownList($model,'subtema',$subtemas); ?></span>
		<?php echo $form->error($model,'subtema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asunto',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'asunto',array('readonly'=>'readonly')); ?></span>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="clear"></div>	
	
	<div class="row centered"><p class="error"><?php echo $error; ?></p></div>
	
	<div class="row buttons centered">
		<?php echo CHtml::resetButton('Borrar', array( 'class'=>'buttonPQR','onclick'=>'borrarSubtema()')); ?>
		<?php echo CHtml::submitButton('Actualizar', array( 'class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->