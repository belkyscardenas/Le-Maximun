<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingrediente-form',
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
		<?php echo $form->labelEx($model,'Unidad'); ?>
		<?php echo $form->dropDownList($model,'Unidad',array('empty'=>'Seleccione tipo de Unidad','Gr'=>'Gramos','KG'=>'Kilogramos')); ?>
		<?php echo $form->error($model,'Unidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio_Unitario'); ?>
		<?php echo $form->textField($model,'Precio_Unitario'); ?>
		<?php echo $form->error($model,'Precio_Unitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->dropDownList($model,'Estado',array(''=>'','0'=>'Mal Estado','1'=>'Buen Estado')); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	
	<input class="btn btn-primary" type="submit" name="yt1" value="Agregar"; Submit>

	

<?php $this->endWidget(); ?>

</div><!-- form -->