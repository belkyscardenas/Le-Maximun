<?php
$this->breadcrumbs=array(
	'Platos',
);

$this->menu=array(
	array('label'=>'Create Plato', 'url'=>array('create')),
	array('label'=>'Manage Plato', 'url'=>array('admin')),
);
?>

<h1>Platos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
