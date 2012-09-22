<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Plato_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_Plato_ID), array('view', 'id'=>$data->T_Plato_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Menu_ID')); ?>:</b>
	<?php echo CHtml::encode($data->T_Menu_ID); ?>
	<br />


</div>