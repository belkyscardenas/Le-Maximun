<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'T_Receta_id'); ?>
		<?php echo $form->textField($model,'T_Receta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cant_Ingrediente'); ?>
		<?php echo $form->textField($model,'Cant_Ingrediente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T_Ingrediente_ID'); ?>
		<?php echo $form->textField($model,'T_Ingrediente_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T_Plato_ID'); ?>
		<?php echo $form->textField($model,'T_Plato_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->