<?php
/* @var $this VentanillaController */
/* @var $model Ciudadanos */
/* @var $model Empresas */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Ventanilla'=>array('/ventanilla'),
	'CrearContacto',
);
?>

<script language="javascript">
	

	function tipoContactoChange(tipoContacto)	{   
		var divs = document.getElementsByName("TipoContacto");
		var div;
		
		// ocultar los divs
		for (var div = 0; div < divs.length; div++) {
			divs[div].style.display = 'none';			
		}

		// aparecer el correcto
	    if(tipoContacto!="") {
		    var div = document.getElementById(tipoContacto+'Div');
		    div.style.display = 'block';
	    }
	}
</script>
	    
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'crearContacto')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo de Contacto:'); ?>
	    <?php echo $form->radioButtonList($model,'tipoContacto',
	    									array('Ciudadano'=>'Ciudadano','Empresa'=>'Empresa'), 
	    									array('onchange'=>'tipoContactoChange(this.value);')); ?>	
	</div>


	<div name="TipoContacto" id="CiudadanoDiv">
		<?php echo $form->errorSummary($model1); ?>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'tipoId'); ?>
			<?php echo $form->dropDownList($model1,'tipoId',$tiposId); ?>
			<?php echo $form->error($model1,'tipoId'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'id'); ?>
			<?php echo $form->textField($model1,'id'); ?>
			<?php echo $form->error($model1,'id'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model1,'nombres'); ?>
			<?php echo $form->textField($model1,'nombres'); ?>
			<?php echo $form->error($model1,'nombres'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model1,'primerApelldio'); ?>
			<?php echo $form->textField($model1,'primerApelldio'); ?>
			<?php echo $form->error($model1,'primerApelldio'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'segundoApellido'); ?>
			<?php echo $form->textField($model1,'segundoApellido'); ?>
			<?php echo $form->error($model1,'segundoApellido'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'direccion'); ?>
			<?php echo $form->textField($model1,'direccion'); ?>
			<?php echo $form->error($model1,'direccion'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'telefono'); ?>
			<?php echo $form->textField($model1,'telefono'); ?>
			<?php echo $form->error($model1,'telefono'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model1,'correo'); ?>
			<?php echo $form->textField($model1,'correo'); ?>
			<?php echo $form->error($model1,'correo'); ?>
		</div>
	</div>
	
	<div name="TipoContacto" id="EmpresaDiv">
		<?php echo $form->errorSummary($model2); ?>
		
		<div class="row">
			<?php echo $form->labelEx($model2,'nit'); ?>
			<?php echo $form->textField($model2,'nit'); ?>
			<?php echo $form->error($model2,'nit'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'nombre'); ?>
			<?php echo $form->textField($model2,'nombre'); ?>
			<?php echo $form->error($model2,'nombre'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'direccion'); ?>
			<?php echo $form->textField($model2,'direccion'); ?>
			<?php echo $form->error($model2,'direccion'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model2,'telefono'); ?>
			<?php echo $form->textField($model2,'telefono'); ?>
			<?php echo $form->error($model2,'telefono'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model2,'correo'); ?>
			<?php echo $form->textField($model2,'correo'); ?>
			<?php echo $form->error($model2,'correo'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'nombreContacto'); ?>
			<?php echo $form->textField($model2,'nombreContacto'); ?>
			<?php echo $form->error($model2,'nombreContacto'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'primerApellidoContacto'); ?>
			<?php echo $form->textField($model2,'primerApellidoContacto'); ?>
			<?php echo $form->error($model2,'primerApellidoContacto'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'segundoApellidoContacto'); ?>
			<?php echo $form->textField($model2,'segundoApellidoContacto'); ?>
			<?php echo $form->error($model2,'segundoApellidoContacto'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model2,'telefonoContacto'); ?>
			<?php echo $form->textField($model2,'telefonoContacto'); ?>
			<?php echo $form->error($model2,'telefonoContacto'); ?>
		</div>    			
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'Pais:'); ?>
		<?php echo $form->dropDownList($model,'pais',$paises, array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('listaDepartamentos'),
                'update'=>'#' . CHtml::activeId($model, 'departamento')
            ), 'prompt'=>' '
        )); ?>			
		<?php echo $form->error($model,'pais'); ?>
	</div>
	
	<div class="row" id="departamentoDiv">
		<?php echo $form->labelEx($model,'Departamento:'); ?>
		<?php echo $form->dropDownList($model, 'departamento', array(), array(
            'ajax'=>array(
                'type'=>'POST',
                'url'=>$this->createUrl('listaCiudades'),
                'update'=>'#' . CHtml::activeId($model1, 'ciudad')
            ), 'prompt'=>' '
        ));
        ?>
		<?php echo $form->error($model,'departamento'); ?>
	</div>

	<div class="row" id="ciudadDiv">
		<?php echo $form->labelEx($model1,'ciudad'); ?>
		<?php echo $form->dropDownList($model1, 'ciudad', array()); ?>
		<?php echo $form->error($model1,'ciudad'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::resetButton('Cancelar', array( 'onclick'=>'tipoContactoChange("Ciudadano")')); ?>
		<?php echo CHtml::submitButton('Crear'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->