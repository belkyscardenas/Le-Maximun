<?php
$this->breadcrumbs=array(
	'Platos'=>array('index'),
	$model->T_Plato_ID=>array('view','id'=>$model->T_Plato_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plato', 'url'=>array('index')),
	array('label'=>'Create Plato', 'url'=>array('create')),
	array('label'=>'View Plato', 'url'=>array('view', 'id'=>$model->T_Plato_ID)),
	array('label'=>'Manage Plato', 'url'=>array('admin')),
);
?>

<h1>Update Plato <?php echo $model->T_Plato_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>