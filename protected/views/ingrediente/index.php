<?php
$this->breadcrumbs=array(
	'Ingredientes',
);

$this->menu=array(
	array('label'=>'Agregar Ingrediente', 'url'=>array('create')),
	array('label'=>'Administrar Ingrediente', 'url'=>array('admin')),
);
?>

<h1>Ingredientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
