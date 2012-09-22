<h1>Editando la tarea</h1>
<?php
	
	$form=$this->beginWidget('CActiveForm');
?>
<div>
<?php echo $form->labelEx($registro,'nombre');?>
<?php echo $form->textField($registro,'nombre'); ?>
<?php echo $form->error($registro,'nombre'); ?>

</div>

<div>
<?php echo $form->labelEx($registro,'descripcion');?>
<?php echo $form->textArea($registro,'descripcion'); ?>
<?php echo $form->error($registro,'descripcion'); ?>

</div>

<?php echo CHtml::submitButton('Editar'); ?>

<?php
		$this->endWidget();
?>

