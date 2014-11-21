<?php
/* @var $this GoodsController */
/* @var $model Goods */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description_short'); ?>
		<?php echo $form->textArea($model,'description_short',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_description'); ?>
		<?php echo $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_keywords'); ?>
		<?php echo $form->textField($model,'meta_keywords',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_id'); ?>
		<?php echo $form->textField($model,'supplier_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'manufacturer_id'); ?>
		<?php echo $form->textField($model,'manufacturer_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category_default_id'); ?>
		<?php echo $form->textField($model,'category_default_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shop_id'); ?>
		<?php echo $form->textField($model,'shop_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'on_sale'); ?>
		<?php echo $form->textField($model,'on_sale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'online_only'); ?>
		<?php echo $form->textField($model,'online_only'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ean13'); ?>
		<?php echo $form->textField($model,'ean13',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upc'); ?>
		<?php echo $form->textField($model,'upc',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tax'); ?>
		<?php echo $form->textField($model,'tax',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'minimal_quantity'); ?>
		<?php echo $form->textField($model,'minimal_quantity',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wholesale_price'); ?>
		<?php echo $form->textField($model,'wholesale_price',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unity'); ?>
		<?php echo $form->textField($model,'unity',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unit_price_ratio'); ?>
		<?php echo $form->textField($model,'unit_price_ratio',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_shipping_cost'); ?>
		<?php echo $form->textField($model,'additional_shipping_cost',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reference'); ?>
		<?php echo $form->textField($model,'reference',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_reference'); ?>
		<?php echo $form->textField($model,'supplier_reference',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'location'); ?>
		<?php echo $form->textField($model,'location',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width'); ?>
		<?php echo $form->textField($model,'width',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'height'); ?>
		<?php echo $form->textField($model,'height',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'depth'); ?>
		<?php echo $form->textField($model,'depth',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'out_of_stock'); ?>
		<?php echo $form->textField($model,'out_of_stock',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_discount'); ?>
		<?php echo $form->textField($model,'quantity_discount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customizable'); ?>
		<?php echo $form->textField($model,'customizable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploadable_files'); ?>
		<?php echo $form->textField($model,'uploadable_files'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text_fields'); ?>
		<?php echo $form->textField($model,'text_fields'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'redirect_type'); ?>
		<?php echo $form->textField($model,'redirect_type',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_product_redirected'); ?>
		<?php echo $form->textField($model,'id_product_redirected',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_for_order'); ?>
		<?php echo $form->textField($model,'available_for_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'available_date'); ?>
		<?php echo $form->textField($model,'available_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condition'); ?>
		<?php echo $form->textField($model,'condition',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'show_price'); ?>
		<?php echo $form->textField($model,'show_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indexed'); ?>
		<?php echo $form->textField($model,'indexed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_virtual'); ?>
		<?php echo $form->textField($model,'is_virtual'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->