<?php
$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista Articulos', 'url'=>array('index')),
	array('label'=>'Administrar Articulos', 'url'=>array('admin')),
);
?>

<h1>Create Articulo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>