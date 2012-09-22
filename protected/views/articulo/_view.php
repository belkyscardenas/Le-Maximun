<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Articulo_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_Articulo_ID), array('view', 'id'=>$data->T_Articulo_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Vigencia')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Vigencia); ?>
	<br />


</div>