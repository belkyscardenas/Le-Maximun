<?php
$this->breadcrumbs=array(
	'Platos'=>array('index'),
	$model->T_Plato_ID,
);

$this->menu=array(
	array('label'=>'List Plato', 'url'=>array('index')),
	array('label'=>'Create Plato', 'url'=>array('create')),
	array('label'=>'Update Plato', 'url'=>array('update', 'id'=>$model->T_Plato_ID)),
	array('label'=>'Delete Plato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->T_Plato_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plato', 'url'=>array('admin')),
);
?>

<h1>View Plato #<?php echo $model->T_Plato_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Descripcion',
		'Nombre',
		'T_Plato_ID',
		'T_Menu_ID',
	),
)); ?>
