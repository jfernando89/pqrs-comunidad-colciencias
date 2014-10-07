<?php
/* @var $this CiudadanosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ciudadanoses',
);

$this->menu=array(
	array('label'=>'Create Ciudadanos', 'url'=>array('create')),
	array('label'=>'Manage Ciudadanos', 'url'=>array('admin')),
);
?>

<h1>Ciudadanoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
