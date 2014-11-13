<?php
/* @var $this ExpedienteFormController */
/* @var $model ExpedienteForm */
/* @var $form CActiveForm */
?>

<h1>Incluir a Expediente</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'ExpedienteForm',
													'action'=>Yii::app()->createUrl('//GAC/guardarIncluirExpediente'))); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pqrs',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'pqrs',array('readonly'=>'readonly')); ?></span>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'expediente',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->dropDownList($model,'expediente',$expedientes
// 				, array(
//             'ajax'=>array(
//                 'type'=>'POST',
//                 'url'=>$this->createUrl('listaDependencias'),
//                 'update'=>'#' . CHtml::activeId($model, 'dependencia')
//             ), 
// 			 'prompt'=>' ',
//         )
		); ?></span>
		<?php echo $form->error($model,'expediente'); ?>

		<?php echo $form->labelEx($model,'dependencia',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->dropDownList($model,'dependencia',$dependencias); ?></span>
		<?php echo $form->error($model,'dependencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->dropDownList($model,'usuario',$usuarios); ?></span>
		<?php echo $form->error($model,'usuario'); ?>

		<?php echo $form->labelEx($model,'asunto',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'asunto',array('readonly'=>'readonly')); ?></span>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serie',array('class'=>'span-5')); ?>
		<span class="span-6"><?php echo $form->textField($model,'serie',array('readonly'=>'readonly')); ?></span>
		<?php echo $form->error($model,'serie'); ?>

		<?php echo $form->labelEx($model,'subserie',array('class'=>'span-5')); ?>
		<span class="span-5"><?php echo $form->textField($model,'subserie',array('readonly'=>'readonly')); ?></span>
		<?php echo $form->error($model,'subserie'); ?>
	</div>

	<div class="clear"></div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Incluir', array( 'class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->