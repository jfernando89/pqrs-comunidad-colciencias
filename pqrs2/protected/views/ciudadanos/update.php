<?php
/* @var $this CiudadanosController */
/* @var $model Ciudadanos */

$this->breadcrumbs=array(
	'Ciudadanoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ciudadanos', 'url'=>array('index')),
	array('label'=>'Create Ciudadanos', 'url'=>array('create')),
	array('label'=>'View Ciudadanos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ciudadanos', 'url'=>array('admin')),
);
?>

<h1>Update Ciudadanos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>