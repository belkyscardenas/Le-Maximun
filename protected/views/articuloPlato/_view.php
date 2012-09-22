<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_ArtPlato_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->T_ArtPlato_ID), array('view', 'id'=>$data->T_ArtPlato_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Articulo_T_Articulo_ID')); ?>:</b>
	<?php echo CHtml::encode($data->T_Articulo_T_Articulo_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('T_Menu_T_Menu_ID')); ?>:</b>
	<?php echo CHtml::encode($data->T_Menu_T_Menu_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cant_Articulo')); ?>:</b>
	<?php echo CHtml::encode($data->Cant_Articulo); ?>
	<br />


</div>