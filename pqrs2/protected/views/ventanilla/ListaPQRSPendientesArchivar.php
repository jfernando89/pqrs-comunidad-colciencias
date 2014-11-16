<?php
/* @var $this VentanillaController */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'ListaPQRSPendientesArchivar',
);
?>
<h1>PQRS Pendientes de Archivar</h1>

<?php 
	if ( isset($dataProvider) ) {
?>
		<div class="row">
		<?php $this->widget('zii.widgets.grid.CGridView', array('dataProvider'=>$dataProvider,
				'columns'=>array(
					array('header'=>'Radicado',
						  'name'=>'id',
						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Asunto',
							'name'=>'asunto',
							'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Expediente',
						  'name'=>'dependencia0.expediente',
						  'htmlOptions' => array('class'=>'centered'),
					),
					array('header'=>'Usuario Encargado GAC',
						  'name'=>'gac0.wholeName',
						  'htmlOptions' => array('width' => 150, 'class'=>'centered'),
					),
					array('class'=>'CButtonColumn',
						  'header'=> 'Recibir',
						  'htmlOptions' => array('width' => 80, 'class'=>'centered'),
						  'template' => '{file}',
						  'buttons'=>array(
						        'file' => array
						        (						        	
						            'label'=>'Recibir',
						        	'imageUrl' => Yii::app()->baseUrl . '/images/recibir.png',
// 						            'url'=>'"#"',
// 						            'click'=>'function(){alert("id");}',
						        		'url'=>'Yii::app()->createUrl("ventanilla/archivar", array("pqrs"=>$data->id))',
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
