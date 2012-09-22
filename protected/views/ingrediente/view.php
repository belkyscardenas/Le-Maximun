<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->T_Ingrediente_ID,
);

$this->menu=array(
	array('label'=>'Lista Ingredientes', 'url'=>array('index')),
	array('label'=>'Agregar Ingrediente', 'url'=>array('create')),
	array('label'=>'Editar Ingrediente', 'url'=>array('update', 'id'=>$model->T_Ingrediente_ID)),
	array('label'=>'Eliminar Ingrediente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Ingrediente_ID),'confirm'=>'Estas seguro que quieres eliminar este elemento?')),
	array('label'=>'Administrar Ingrediente', 'url'=>array('admin')),
);
?>

<h1>View Ingrediente #<?php echo $model->T_Ingrediente_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombre',
		'Unidad',
		'Precio_Unitario',
		'Estado',
		'T_Ingrediente_ID',
	),
)); ?>
