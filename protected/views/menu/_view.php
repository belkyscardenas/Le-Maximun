<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Menu_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_Menu_ID), array('view', 'id'=>$data->T_Menu_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Inicio')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
	<?php echo CHtml::encode($data->Precio); ?>
	<br />


</div>