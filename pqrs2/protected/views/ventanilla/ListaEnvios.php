<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'EnviarRespuesta',
);
?>

<?php 
	foreach( Yii::app()->user->getFlashes() as $key => $message ) {
		echo '<div class="flash-' . $key . '">' . $message . "</div>\n";
	}

	Yii::app()->clientScript->registerScript('myHideEffect','$(".flash-success").animate({opacity: 1.0}, 3000).fadeOut("slow");',CClientScript::POS_READY);
?>

<h1>Respuestas Pendientes de Envío</h1>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
		        	array('header'=>'PQRS',
						  'name'=>'id',
						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Respuesta',
							'name'=>'respuesta',
							'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Fecha Respuesta',
						  'name'=>'respuesta0.fecha',
						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Asunto',
						  'name'=>'asunto',
						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('header'=>'Destinatario',
							'name'=>'contacto',
							'htmlOptions' => array('class'=>'centered'),
					),
					array('class'=>'CButtonColumn',
						  'header'=>'Enviar',
						  'template' => '{enviar}',
						  'buttons'=>array(
						        'enviar' => array
						        (						        	
						            'label'=>'Enviar',
						        	'imageUrl' => Yii::app()->baseUrl . '/images/enviar.gif',
// 						            'url'=>'"#"',
// 						            'click'=>'function(){alert("id");}',
						        		'url'=>'Yii::app()->createUrl("ventanilla/enviar", array("pqrs"=>$data->id))',
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
