<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Goods', 'url'=>array('index')),
	array('label'=>'Create Goods', 'url'=>array('create')),
	array('label'=>'Update Goods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Goods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goods', 'url'=>array('admin')),
);
?>

<h1>View Goods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'description_short',
		'meta_description',
		'meta_keywords',
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
	),
)); ?>
