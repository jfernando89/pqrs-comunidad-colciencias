<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'ListaComprobantesEntrega',
);
?>

<h1>Comprobantes de Entrega Pendientes</h1>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
					array('header'=>'Contacto',
						  'name'=>'contacto',
// 						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'PQRS',
							'name'=>'id',
// 							'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Folios',
						  'name'=>'folios',
// 						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Anexos',
						  'name'=>'anexos',
// 						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('header'=>'Respuesta',
							'name'=>'respuesta',
							// 						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('header'=>'Fecha Respuesta',
							'name'=>'respuesta0.fecha',
							// 						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('header'=>'Envio',
							'name'=>'respuesta0.envio',
							// 						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('class'=>'CButtonColumn',
						  'header'=> 'Resultado',
						  'htmlOptions' => array('width' => 100, 'class'=>'centered'),
						  'template' => '{exito}  {direccion}  {rechazado}',
						  'buttons'=>array(
						        'exito' => array
						        (						        	
						            'label'=>'Entregado Exitosamente',
						        	'imageUrl' => Yii::app()->baseUrl . '/images/exito.gif',
					        		'url'=>'Yii::app()->createUrl("ventanilla/resultadoComprobante", array("pqrs"=>$data->id,"resultado"=>1))',
						        	'visible'=>'true'
						        ),
						  		'direccion' => array
						  		(
					  				'label'=>'Direccion Incorrecta',
					  				'imageUrl' => Yii::app()->baseUrl . '/images/direccion1.png',
					  				'url'=>'Yii::app()->createUrl("ventanilla/resultadoComprobante", array("pqrs"=>$data->id,"resultado"=>3))',
					  				'visible'=>'true'
						  		),
						  		'rechazado' => array
						  		(
					  				'label'=>'Rechazado',
					  				'imageUrl' => Yii::app()->baseUrl . '/images/rechazado.png',
					  				'url'=>'Yii::app()->createUrl("ventanilla/resultadoComprobante", array("pqrs"=>$data->id,"resultado"=>4))',
						  			'visible'=>'true'
						  		)
						    )							
					)
				)));
// 				'selectionChanged'=>'function(id){adjuntarArchivo($.fn.yiiGridView.getSelection(id));}'));
		?>
		</div>
<?php 
	}
?>
