<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'ListaPQRSPendientesDigitalizar',
);
?>

<?php 
	foreach( Yii::app()->user->getFlashes() as $key => $message ) {
		echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
	}

	Yii::app()->clientScript->registerScript('myHideEffect','$(".flash-success").animate({opacity: 1.0}, 3000).fadeOut("slow");',CClientScript::POS_READY);
?>

<h1>PQRS Pendientes de Digitalizar</h1>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
		        	array('header'=>'N. PQRS',
		        		  'name'=>'id'), 
					array('header'=>'Tipo de PQRS',
						  'name'=>'subtema0.nombre'
					),
					array('header'=>'Usuario Asignado',
						  'name'=>'gac0.nombre'
					),
					array('header'=>'Dependencia',
						  'name'=>'dependencia0.nombre'
					),
					array('header'=>'Remitente',
						  'name'=>'contacto'
					),
					array('class'=>'CButtonColumn',
						  'template' => '{file}',
						  'buttons'=>array(
						        'file' => array
						        (						        	
						            'label'=>'Subir Archivo',
						        	'imageUrl' => Yii::app()->baseUrl . '/images/subir.png',
// 						            'url'=>'"#"',
// 						            'click'=>'function(){alert("id");}',
						        		'url'=>'Yii::app()->createUrl("ventanilla/digitalizar", array("pqrs"=>$data->id))',
// 						        		'options'=>array(
// 						        				'ajax'=>array(
// 						        						'type'=>'POST',
// 						        						'url'=>"js:$(this).attr('href')",
// 						        				),
// 						        		),
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
