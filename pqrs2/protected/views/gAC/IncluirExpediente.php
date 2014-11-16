<?php
/* @var $this GACController */

$this->breadcrumbs=array(
	'GAC'=>array('/gAC'),
	'IncluirExpediente',
);
?>
<h1>PQRS Disponibles para Incluir a Expediente</h1>
<h2 class="h22 centered">Recuerde cambiar la dependencia por defecto (GAC) de los PQRS sin incluir a expediente</h2>

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
					array('header'=>'Dependencia',
						  'name'=>'dependencia0.nombre'
					),
					array('header'=>'Remitente',
						  'name'=>'contacto'
					),
					array('class'=>'CButtonColumn',
						  'template' => '{asignar}',
						  'buttons'=>array(
						        'asignar' => array
						        (						        	
						            'label'=>'Incluir a Expediente',
						        	'imageUrl' => Yii::app()->baseUrl . '/images/editar.gif',
// 						            'url'=>'"#"',
// 						            'click'=>'function(){alert("id");}',
						        		'url'=>'Yii::app()->createUrl("GAC/verIncluirExpediente", array("pqrs"=>$data->id))',
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
