<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'receta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cant_Ingrediente'); ?>
		<?php echo $form->textField($model,'Cant_Ingrediente'); ?>
		<?php echo $form->error($model,'Cant_Ingrediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'T_Ingrediente_ID'); ?>
		<?php echo $form->textField($model,'T_Ingrediente_ID'); ?>
		<?php echo $form->error($model,'T_Ingrediente_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'T_Plato_ID'); ?>
		<?php echo $form->textField($model,'T_Plato_ID'); ?>
		<?php echo $form->error($model,'T_Plato_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->