<?php
$this->breadcrumbs=array(
	'Articulo Platos',
);

$this->menu=array(
	array('label'=>'Create ArticuloPlato', 'url'=>array('create')),
	array('label'=>'Manage ArticuloPlato', 'url'=>array('admin')),
);
?>

<h1>Articulo Platos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
