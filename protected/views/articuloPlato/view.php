<?php
$this->breadcrumbs=array(
	'Articulo Platos'=>array('index'),
	$model->T_ArtPlato_ID,
);

$this->menu=array(
	array('label'=>'List ArticuloPlato', 'url'=>array('index')),
	array('label'=>'Create ArticuloPlato', 'url'=>array('create')),
	array('label'=>'Update ArticuloPlato', 'url'=>array('update', 'id'=>$model->T_ArtPlato_ID)),
	array('label'=>'Delete ArticuloPlato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_ArtPlato_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ArticuloPlato', 'url'=>array('admin')),
);
?>

<h1>View ArticuloPlato #<?php echo $model->T_ArtPlato_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'T_Articulo_T_Articulo_ID',
		'T_Menu_T_Menu_ID',
		'T_ArtPlato_ID',
		'Descripcion',
		'Cant_Articulo',
	),
)); ?>
