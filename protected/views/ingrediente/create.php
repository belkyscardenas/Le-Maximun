<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ingrediente', 'url'=>array('index')),
	array('label'=>'Manage Ingrediente', 'url'=>array('admin')),
);
?>

<h1>Create Ingrediente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>