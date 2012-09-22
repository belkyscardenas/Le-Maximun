<?php
$this->breadcrumbs=array(
	'Ingredientes'=>array('index'),
	$model->T_Ingrediente_ID=>array('view','id'=>$model->T_Ingrediente_ID),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Ingredientes', 'url'=>array('index')),
	array('label'=>'Agregar Ingrediente', 'url'=>array('create')),
	array('label'=>'Ver Ingrediente', 'url'=>array('view', 'id'=>$model->T_Ingrediente_ID)),
	array('label'=>'Administrar Ingrediente', 'url'=>array('admin')),
);
?>

<h1>Editar Ingrediente <?php echo $model->T_Ingrediente_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>