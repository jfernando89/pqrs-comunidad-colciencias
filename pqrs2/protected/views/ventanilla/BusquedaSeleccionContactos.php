<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'BusquedaSeleccionContactos',
);

echo CHtml::beginForm('ContactoForm');
?>

<div class="row">
<?php echo CHtml::activeLabel($model,'Tipo:'); ?>
<?php echo CHtml::activeTextField($model,'tipoId') ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'NIT / Cedula:'); ?>
<?php echo CHtml::activeTextField($model,'id') ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'Nombre:'); ?>
<?php echo CHtml::activeTextField($model,'nombre') ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model,'Primer Apellido:'); ?>
<?php echo CHtml::activeTextField($model,'primerApellido') ?>
</div>

<?php echo CHtml::endForm(); ?>
