<?php
$this->breadcrumbs=array(
	'Articulo Platos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ArticuloPlato', 'url'=>array('index')),
	array('label'=>'Create ArticuloPlato', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('articulo-plato-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Articulo Platos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulo-plato-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'T_Articulo_T_Articulo_ID',
		'T_Menu_T_Menu_ID',
		'T_ArtPlato_ID',
		'Descripcion',
		'Cant_Articulo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
