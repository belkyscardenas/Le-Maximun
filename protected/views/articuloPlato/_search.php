<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'T_Articulo_T_Articulo_ID'); ?>
		<?php echo $form->textField($model,'T_Articulo_T_Articulo_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T_Menu_T_Menu_ID'); ?>
		<?php echo $form->textField($model,'T_Menu_T_Menu_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'T_ArtPlato_ID'); ?>
		<?php echo $form->textField($model,'T_ArtPlato_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cant_Articulo'); ?>
		<?php echo $form->textField($model,'Cant_Articulo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->