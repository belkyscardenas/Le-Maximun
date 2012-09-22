<?php
$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->T_Articulo_ID,
);

$this->menu=array(
	array('label'=>'Lista Articulo', 'url'=>array('index')),
	array('label'=>'Agregar Articulo', 'url'=>array('create')),
	array('label'=>'Editar Articulo', 'url'=>array('update', 'id'=>$model->T_Articulo_ID)),
	array('label'=>'Eliminar Articulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Articulo_ID),'confirm'=>'Estas seguro que quieres eliminar este Articulo?')),
	array('label'=>'Administrar Articulo', 'url'=>array('admin')),
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
