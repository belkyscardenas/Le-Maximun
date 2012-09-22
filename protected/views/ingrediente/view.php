<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->T_Ingrediente_ID,
);

$this->menu=array(
	array('label'=>'List Ingrediente', 'url'=>array('index')),
	array('label'=>'Create Ingrediente', 'url'=>array('create')),
	array('label'=>'Update Ingrediente', 'url'=>array('update', 'id'=>$model->T_Ingrediente_ID)),
	array('label'=>'Delete Ingrediente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Ingrediente_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ingrediente', 'url'=>array('admin')),
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
