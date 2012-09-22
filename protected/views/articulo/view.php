<?php
$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->T_Articulo_ID,
);

$this->menu=array(
	array('label'=>'List Articulo', 'url'=>array('index')),
	array('label'=>'Create Articulo', 'url'=>array('create')),
	array('label'=>'Update Articulo', 'url'=>array('update', 'id'=>$model->T_Articulo_ID)),
	array('label'=>'Delete Articulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Articulo_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Articulo', 'url'=>array('admin')),
);
?>

<h1>View Articulo #<?php echo $model->T_Articulo_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombre',
		'Descripcion',
		'Fecha_Vigencia',
		'T_Articulo_ID',
	),
)); ?>
