<?php
/* @var $this CiudadanosController */
/* @var $model Ciudadanos */

$this->breadcrumbs=array(
	'Ciudadanoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ciudadanos', 'url'=>array('index')),
	array('label'=>'Manage Ciudadanos', 'url'=>array('admin')),
);
?>

<h1>Create Ciudadanos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>