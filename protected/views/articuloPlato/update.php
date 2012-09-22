<?php
$this->breadcrumbs=array(
	'Articulo Platos'=>array('index'),
	$model->T_ArtPlato_ID=>array('view','id'=>$model->T_ArtPlato_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List ArticuloPlato', 'url'=>array('index')),
	array('label'=>'Create ArticuloPlato', 'url'=>array('create')),
	array('label'=>'View ArticuloPlato', 'url'=>array('view', 'id'=>$model->T_ArtPlato_ID)),
	array('label'=>'Manage ArticuloPlato', 'url'=>array('admin')),
);
?>

<h1>Update ArticuloPlato <?php echo $model->T_ArtPlato_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>