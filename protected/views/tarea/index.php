

	<h1>Listado de tareas</h1>
	<?php echo 'Probando la vista del index'; ?>
	<?php echo CHtml::link('Crear nueva', array('add')); ?>
	<table>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Ver</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
		<?php foreach ($tareas as $t) {?>
			<tr>
				<th><?php echo $t->id; ?></th>
				<th><?php echo $t->nombre; ?></th>
				<th><?php echo $t->descripcion; ?></th>
				<th><?php echo CHtml::link('Ver',array('view','id'=>$t->id)); ?></th>
				<th><?php echo CHtml::link('Editar',array('edit','id'=>$t->id)); ?></th>
				<th><?php echo CHtml::link('eliminar',array('delete','id'=>$t->id),array('confirm'=>'Seguro desea eliminar?')); ?></th>

			</tr>

		<?php }?>
	</table>
