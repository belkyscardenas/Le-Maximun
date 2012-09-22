<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Ingrediente', 'url'=>array('index')),
	array('label'=>'Administrar Ingredientes', 'url'=>array('admin')),
);
?>

<h1>Creacion de Ingredientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>