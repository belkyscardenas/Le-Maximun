<?php
$this->breadcrumbs=array(
	'Articulo Platos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ArticuloPlato', 'url'=>array('index')),
	array('label'=>'Manage ArticuloPlato', 'url'=>array('admin')),
);
?>

<h1>Create ArticuloPlato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>