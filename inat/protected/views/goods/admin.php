<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#goods-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Goods</h1>

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
	'id'=>'goods-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'description',
		'description_short',
		'meta_description',
		'meta_keywords',
		/*
		'meta_title',
		'supplier_id',
		'manufacturer_id',
		'category_default_id',
		'shop_id',
		'on_sale',
		'online_only',
		'ean13',
		'upc',
		'tax',
		'quantity',
		'minimal_quantity',
		'price',
		'wholesale_price',
		'unity',
		'unit_price_ratio',
		'additional_shipping_cost',
		'reference',
		'supplier_reference',
		'location',
		'width',
		'height',
		'depth',
		'weight',
		'out_of_stock',
		'quantity_discount',
		'customizable',
		'uploadable_files',
		'text_fields',
		'active',
		'redirect_type',
		'id_product_redirected',
		'available_for_order',
		'available_date',
		'condition',
		'show_price',
		'indexed',
		'visibility',
		'is_virtual',
		'created',
		'modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
