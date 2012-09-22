<?php
$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->T_Receta_id,
);

$this->menu=array(
	array('label'=>'List Receta', 'url'=>array('index')),
	array('label'=>'Create Receta', 'url'=>array('create')),
	array('label'=>'Update Receta', 'url'=>array('update', 'id'=>$model->T_Receta_id)),
	array('label'=>'Delete Receta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Receta_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>View Receta #<?php echo $model->T_Receta_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'T_Receta_id',
		'Descripcion',
		'Cant_Ingrediente',
		'T_Ingrediente_ID',
		'T_Plato_ID',
	),
)); ?>
