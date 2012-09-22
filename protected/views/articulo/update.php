<?php
$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	$model->T_Articulo_ID=>array('view','id'=>$model->T_Articulo_ID),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Articulos', 'url'=>array('index')),
	array('label'=>'Agregar Articulo', 'url'=>array('create')),
	array('label'=>'Ver Articulo', 'url'=>array('view', 'id'=>$model->T_Articulo_ID)),
	array('label'=>'Administrar Articulo', 'url'=>array('admin')),
);
?>

<h1>Update Articulo <?php echo $model->T_Articulo_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>