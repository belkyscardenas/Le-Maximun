<?php
$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->T_Articulo_ID=>array('view','id'=>$model->T_Articulo_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Articulo', 'url'=>array('index')),
	array('label'=>'Create Articulo', 'url'=>array('create')),
	array('label'=>'View Articulo', 'url'=>array('view', 'id'=>$model->T_Articulo_ID)),
	array('label'=>'Manage Articulo', 'url'=>array('admin')),
);
?>

<h1>Update Articulo <?php echo $model->T_Articulo_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>