<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->T_Ingrediente_ID=>array('view','id'=>$model->T_Ingrediente_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ingrediente', 'url'=>array('index')),
	array('label'=>'Create Ingrediente', 'url'=>array('create')),
	array('label'=>'View Ingrediente', 'url'=>array('view', 'id'=>$model->T_Ingrediente_ID)),
	array('label'=>'Manage Ingrediente', 'url'=>array('admin')),
);
?>

<h1>Update Ingrediente <?php echo $model->T_Ingrediente_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>