<?php
$this->breadcrumbs=array(
	'Ingredientes',
);

$this->menu=array(
	array('label'=>'Create Ingrediente', 'url'=>array('create')),
	array('label'=>'Manage Ingrediente', 'url'=>array('admin')),
);
?>

<h1>Ingredientes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
