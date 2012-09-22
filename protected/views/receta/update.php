<?php
$this->breadcrumbs=array(
	'Recetas'=>array('index'),
	$model->T_Receta_id=>array('view','id'=>$model->T_Receta_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Receta', 'url'=>array('index')),
	array('label'=>'Create Receta', 'url'=>array('create')),
	array('label'=>'View Receta', 'url'=>array('view', 'id'=>$model->T_Receta_id)),
	array('label'=>'Manage Receta', 'url'=>array('admin')),
);
?>

<h1>Update Receta <?php echo $model->T_Receta_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>