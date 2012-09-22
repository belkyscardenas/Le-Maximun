<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Ingrediente_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_Ingrediente_ID), array('view', 'id'=>$data->T_Ingrediente_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unidad')); ?>:</b>
	<?php echo CHtml::encode($data->Unidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio_Unitario')); ?>:</b>
	<?php echo CHtml::encode($data->Precio_Unitario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />


</div>