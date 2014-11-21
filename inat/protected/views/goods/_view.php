<?php
/* @var $this GoodsController */
/* @var $data Goods */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description_short')); ?>:</b>
	<?php echo CHtml::encode($data->description_short); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_description')); ?>:</b>
	<?php echo CHtml::encode($data->meta_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_keywords')); ?>:</b>
	<?php echo CHtml::encode($data->meta_keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meta_title')); ?>:</b>
	<?php echo CHtml::encode($data->meta_title); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_id')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('manufacturer_id')); ?>:</b>
	<?php echo CHtml::encode($data->manufacturer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_default_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_default_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shop_id')); ?>:</b>
	<?php echo CHtml::encode($data->shop_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('on_sale')); ?>:</b>
	<?php echo CHtml::encode($data->on_sale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('online_only')); ?>:</b>
	<?php echo CHtml::encode($data->online_only); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ean13')); ?>:</b>
	<?php echo CHtml::encode($data->ean13); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('upc')); ?>:</b>
	<?php echo CHtml::encode($data->upc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tax')); ?>:</b>
	<?php echo CHtml::encode($data->tax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('minimal_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->minimal_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wholesale_price')); ?>:</b>
	<?php echo CHtml::encode($data->wholesale_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unity')); ?>:</b>
	<?php echo CHtml::encode($data->unity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_price_ratio')); ?>:</b>
	<?php echo CHtml::encode($data->unit_price_ratio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_shipping_cost')); ?>:</b>
	<?php echo CHtml::encode($data->additional_shipping_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference')); ?>:</b>
	<?php echo CHtml::encode($data->reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_reference')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('height')); ?>:</b>
	<?php echo CHtml::encode($data->height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('depth')); ?>:</b>
	<?php echo CHtml::encode($data->depth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('out_of_stock')); ?>:</b>
	<?php echo CHtml::encode($data->out_of_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_discount')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_discount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customizable')); ?>:</b>
	<?php echo CHtml::encode($data->customizable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploadable_files')); ?>:</b>
	<?php echo CHtml::encode($data->uploadable_files); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_fields')); ?>:</b>
	<?php echo CHtml::encode($data->text_fields); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('redirect_type')); ?>:</b>
	<?php echo CHtml::encode($data->redirect_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_product_redirected')); ?>:</b>
	<?php echo CHtml::encode($data->id_product_redirected); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_for_order')); ?>:</b>
	<?php echo CHtml::encode($data->available_for_order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('available_date')); ?>:</b>
	<?php echo CHtml::encode($data->available_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('condition')); ?>:</b>
	<?php echo CHtml::encode($data->condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('show_price')); ?>:</b>
	<?php echo CHtml::encode($data->show_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indexed')); ?>:</b>
	<?php echo CHtml::encode($data->indexed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visibility')); ?>:</b>
	<?php echo CHtml::encode($data->visibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_virtual')); ?>:</b>
	<?php echo CHtml::encode($data->is_virtual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>