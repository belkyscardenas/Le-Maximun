<?php
$this->breadcrumbs=array(
	'Platos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Plato', 'url'=>array('index')),
	array('label'=>'Manage Plato', 'url'=>array('admin')),
);
?>

<h1>Create Plato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>