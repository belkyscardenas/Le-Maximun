<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulo-plato-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'T_Articulo_T_Articulo_ID'); ?>
		<?php echo $form->textField($model,'T_Articulo_T_Articulo_ID'); ?>
		<?php echo $form->error($model,'T_Articulo_T_Articulo_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'T_Menu_T_Menu_ID'); ?>
		<?php echo $form->textField($model,'T_Menu_T_Menu_ID'); ?>
		<?php echo $form->error($model,'T_Menu_T_Menu_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cant_Articulo'); ?>
		<?php echo $form->textField($model,'Cant_Articulo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Cant_Articulo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->