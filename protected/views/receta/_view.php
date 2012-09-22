<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Receta_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_Receta_id), array('view', 'id'=>$data->T_Receta_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cant_Ingrediente')); ?>:</b>
	<?php echo CHtml::encode($data->Cant_Ingrediente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Ingrediente_ID')); ?>:</b>
	<?php echo CHtml::encode($data->T_Ingrediente_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Plato_ID')); ?>:</b>
	<?php echo CHtml::encode($data->T_Plato_ID); ?>
	<br />


</div>