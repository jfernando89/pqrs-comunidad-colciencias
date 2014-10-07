<?php
/* @var $this CiudadanosController */
/* @var $model Ciudadanos */

$this->breadcrumbs=array(
	'Ciudadanoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ciudadanos', 'url'=>array('index')),
	array('label'=>'Create Ciudadanos', 'url'=>array('create')),
	array('label'=>'Update Ciudadanos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ciudadanos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ciudadanos', 'url'=>array('admin')),
);
?>

<h1>View Ciudadanos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipoId',
		'nombres',
		'primerApelldio',
		'segundoApellido',
		'direccion',
		'telefono',
		'correo',
		'ciudad',
	),
)); ?>
