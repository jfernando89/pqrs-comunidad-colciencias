<?php
/* @var $this GACController */
/* @var $this PlantillaFormController */
/* @var $model PlantillaForm */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'GAC'=>array('/gAC'),
	'GestionarPlantillas',
);
?>
<h1>Plantillas de Respuesta Disponibles</h1>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
		        	array('header'=>'Id',
		        		  'name'=>'id',
		        		  'htmlOptions'=>array( 'width'=>50, 'class'=>'centered')
					), 
					array('header'=>'Nombre',
						  'name'=>'nombre',
		        		  'htmlOptions'=>array( 'width'=>250 )
					),
					array('header'=>'Texto',
						  'name'=>'texto',
					))));
		?>
		</div>
<?php 
	}
?>
<br>
<br>
<br>
<h1>Agregar Nueva Plantilla</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'PlantillaForm')); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre',array('class'=>'span-2')); ?>
		<?php echo $form->textField($model,'nombre',array('widht'=>50,'maxlength' => 50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto',array('class'=>'span-5')); ?>
		<?php echo $form->textarea($model,'texto',array('maxlength' => 1000, 'rows' => 5, 'cols' => 118)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="clear"></div>

	<div class="row buttons centered">
		<?php echo CHtml::submitButton('Crear', array( 'class'=>'buttonPQR')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
