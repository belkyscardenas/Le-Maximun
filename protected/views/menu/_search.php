<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Inicio'); ?>
		<?php echo $form->textField($model,'Fecha_Inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_fin'); ?>
		<?php echo $form->textField($model,'Fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T_Menu_ID'); ?>
		<?php echo $form->textField($model,'T_Menu_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->