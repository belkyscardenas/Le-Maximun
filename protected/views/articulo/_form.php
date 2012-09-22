<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Vigencia'); ?>
		<?php #echo $form->textField($model,'Fecha_Vigencia'); 
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    		'model'=> $model,
    		'attribute' => 'Fecha_Vigencia',
    		'options'=>array(
        	'dateFormat'=>'yy-mm-dd',
        	'constrainInput'=>'false',
        	'showAnim'=>'slide',
        
    ),
    
));

		
		?>
		<?php echo $form->error($model,'Fecha_Vigencia'); ?>
	</div>

	<input class="btn btn-primary" type="submit" name="yt1" value="Agregar"; Submit>

<?php $this->endWidget(); ?>

</div><!-- form -->