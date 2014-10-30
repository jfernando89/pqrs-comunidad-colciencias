<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'BusquedaSeleccionContactos',
);
?>

<div class="form">

<?php echo CHtml::beginForm($this->createUrl('busquedaSeleccionContactos')); ?>

<div class="row">
<?php echo CHtml::activeLabel($model,'Tipo:',array('class'=>'span-3')); ?>
<?php echo CHtml::activeDropDownList($model,'tipoId',$tiposId); ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'NIT / Cedula:',array('class'=>'span-3')); ?>
<?php echo CHtml::activeTextField($model,'id'); ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'Nombre:',array('class'=>'span-3')); ?>
<?php echo CHtml::activeTextField($model,'nombre'); ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'Primer Apellido:',array('class'=>'span-3')); ?>
<?php echo CHtml::activeTextField($model,'primerApellido'); ?>
</div>

<div class="row">
<div class="span-3"><label></label></div>
<?php echo CHtml::submitButton('Buscar',array('class'=>'buttonPQR')); ?>
<?php echo CHtml::resetButton('Cancelar',array('class'=>'buttonPQR')); ?>
<?php echo CHtml::link('Agregar Contacto',array('ventanilla/crearContacto'),array('class'=>'buttonPQR linkPQR')); ?>
</div>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
			<h2>Resultado de B&uacute;squeda</h2>
		</div>
		
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
		        	array('class'=>'CCheckBoxColumn'),       
		        	array('header'=>'NIT / Cedula',
		        		  'name'=>'id'), 
					array(          
						'name'=>'Nombre',
						'value'=>'$data->wholeName'
					),
					array(
						'header'=>'Telefono',
						'name'=>'telefono'
					),
				),
			    'selectionChanged'=>'function(id){'.
										'var temp = $.fn.yiiGridView.getSelection(id);'.
										'if(temp != null && temp.length > 0){'.
											'location.href = "'.$this->createUrl('ventanilla/radicarPQRS').'&id="+$.fn.yiiGridView.getSelection(id)+"";'.
										'}'.
									'}'));
		?>
		</div>
<?php 
	}
?>

<?php echo CHtml::endForm(); ?>
</div>