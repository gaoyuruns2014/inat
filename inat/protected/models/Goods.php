<?php

/**
 * This is the model class for table "goods".
 *
 * The followings are the available columns in table 'goods':
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $description_short
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $meta_title
 * @property string $supplier_id
 * @property string $manufacturer_id
 * @property string $category_default_id
 * @property string $shop_id
 * @property string $id_tax_rules_group
 * @property int $on_sale
 * @property int $online_only
 * @property string $ean13
 * @property string $upc
 * @property string $tax
 * @property int $quantity
 * @property string $minimal_quantity
 * @property string $price
 * @property string $wholesale_price
 * @property string $unity
 * @property string $unit_price_ratio
 * @property string $additional_shipping_cost
 * @property string $reference
 * @property string $supplier_reference
 * @property string $location
 * @property string $width
 * @property string $height
 * @property string $depth
 * @property string $weight
 * @property string $out_of_stock
 * @property int $quantity_discount
 * @property int $customizable
 * @property int $uploadable_files
 * @property int $text_fields
 * @property int $active
 * @property string $redirect_type
 * @property string $id_product_redirected
 * @property int $available_for_order
 * @property string $available_date
 * @property string $condition
 * @property int $show_price
 * @property int $indexed
 * @property string $visibility
 * @property int $cache_is_pack
 * @property int $cache_has_attachments
 * @property int $is_virtual
 * @property string $cache_default_attribute
 * @property int $created
 * @property int $modified
 * @property int $advanced_stock_management
 */
class Goods extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'goods';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('name, id_tax_rules_group, available_date, created, modified', 'required'),
            array('on_sale, online_only, quantity, quantity_discount, customizable, uploadable_files, text_fields, active, available_for_order, show_price, indexed, cache_is_pack, cache_has_attachments, is_virtual, created, modified, advanced_stock_management', 'numerical', 'intOnly' => true),
            array('name, meta_title', 'length', 'max' => 128),
            array('meta_description, meta_keywords, unity', 'length', 'max' => 255),
            array('supplier_id, manufacturer_id, category_default_id, shop_id, minimal_quantity, out_of_stock, id_product_redirected, cache_default_attribute', 'length', 'max' => 10),
            array('id_tax_rules_group, condition', 'length', 'max' => 11),
            array('ean13', 'length', 'max' => 13),
            array('upc', 'length', 'max' => 12),
            array('tax', 'length', 'max' => 17),
            array('price, wholesale_price, unit_price_ratio, additional_shipping_cost, width, height, depth, weight', 'length', 'max' => 20),
            array('reference, supplier_reference', 'length', 'max' => 32),
            array('location', 'length', 'max' => 64),
            array('redirect_type', 'length', 'max' => 3),
            array('visibility', 'length', 'max' => 7),
            array('description, description_short', 'safe'),
            // The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, name, description, description_short, meta_description, meta_keywords, meta_title, supplier_id, manufacturer_id, category_default_id, shop_id, id_tax_rules_group, on_sale, online_only, ean13, upc, tax, quantity, minimal_quantity, price, wholesale_price, unity, unit_price_ratio, additional_shipping_cost, reference, supplier_reference, location, width, height, depth, weight, out_of_stock, quantity_discount, customizable, uploadable_files, text_fields, active, redirect_type, id_product_redirected, available_for_order, available_date, condition, show_price, indexed, visibility, cache_is_pack, cache_has_attachments, is_virtual, cache_default_attribute, created, modified, advanced_stock_management', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => '商品ID',
            'name' => '名称',
            'description' => '描述',
            'description_short' => '摘要描述',
            'meta_description' => 'meta描述',
            'meta_keywords' => 'meta关键词',
            'meta_title' => 'meta标题',
            'supplier_id' => '供货商id',
            'manufacturer_id' => '制造商id',
            'category_default_id' => '缺省类别',
            'shop_id' => '商店id',
            'id_tax_rules_group' => 'Id Tax Rules Group',
            'on_sale' => '在售',
            'online_only' => '在线',
            'ean13' => 'ean13编码',
            'upc' => 'upc编码',
            'tax' => '税值',
            'quantity' => '库存量',
            'minimal_quantity' => '最小库存量',
            'price' => '价格',
            'wholesale_price' => '批发价',
            'unity' => 'Unity',
            'unit_price_ratio' => '单价',
            'additional_shipping_cost' => '物流费用',
            'reference' => 'Reference',
            'supplier_reference' => 'Supplier Reference',
            'location' => 'Location',
            'width' => '宽',
            'height' => '高',
            'depth' => '深',
            'weight' => '重量',
            'out_of_stock' => 'Out Of Stock',
            'quantity_discount' => '折扣',
            'customizable' => '是否可定制',
            'uploadable_files' => '上传文件',
            'text_fields' => 'Text Fields',
            'active' => '激活状态',
            'redirect_type' => '跳转类型',
            'id_product_redirected' => '跳转id',
            'available_for_order' => '是否可购买',
            'available_date' => '有效时间',
            'condition' => '可用状态',
            'show_price' => '显示价格',
            'indexed' => 'Indexed',
            'visibility' => '可见位置',
            'cache_is_pack' => 'Cache Is Pack',
            'cache_has_attachments' => 'Cache Has Attachments',
            'is_virtual' => '是否是虚拟商品',
            'cache_default_attribute' => '虚拟产品',
            'created' => '创建时间',
            'modified' => '修改时间',
            'advanced_stock_management' => 'Advanced Stock Management',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
// @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('description_short', $this->description_short, true);
        $criteria->compare('meta_description', $this->meta_description, true);
        $criteria->compare('meta_keywords', $this->meta_keywords, true);
        $criteria->compare('meta_title', $this->meta_title, true);
        $criteria->compare('supplier_id', $this->supplier_id, true);
        $criteria->compare('manufacturer_id', $this->manufacturer_id, true);
        $criteria->compare('category_default_id', $this->category_default_id, true);
        $criteria->compare('shop_id', $this->shop_id, true);
        $criteria->compare('id_tax_rules_group', $this->id_tax_rules_group, true);
        $criteria->compare('on_sale', $this->on_sale);
        $criteria->compare('online_only', $this->online_only);
        $criteria->compare('ean13', $this->ean13, true);
        $criteria->compare('upc', $this->upc, true);
        $criteria->compare('tax', $this->tax, true);
        $criteria->compare('quantity', $this->quantity);
        $criteria->compare('minimal_quantity', $this->minimal_quantity, true);
        $criteria->compare('price', $this->price, true);
        $criteria->compare('wholesale_price', $this->wholesale_price, true);
        $criteria->compare('unity', $this->unity, true);
        $criteria->compare('unit_price_ratio', $this->unit_price_ratio, true);
        $criteria->compare('additional_shipping_cost', $this->additional_shipping_cost, true);
        $criteria->compare('reference', $this->reference, true);
        $criteria->compare('supplier_reference', $this->supplier_reference, true);
        $criteria->compare('location', $this->location, true);
        $criteria->compare('width', $this->width, true);
        $criteria->compare('height', $this->height, true);
        $criteria->compare('depth', $this->depth, true);
        $criteria->compare('weight', $this->weight, true);
        $criteria->compare('out_of_stock', $this->out_of_stock, true);
        $criteria->compare('quantity_discount', $this->quantity_discount);
        $criteria->compare('customizable', $this->customizable);
        $criteria->compare('uploadable_files', $this->uploadable_files);
        $criteria->compare('text_fields', $this->text_fields);
        $criteria->compare('active', $this->active);
        $criteria->compare('redirect_type', $this->redirect_type, true);
        $criteria->compare('id_product_redirected', $this->id_product_redirected, true);
        $criteria->compare('available_for_order', $this->available_for_order);
        $criteria->compare('available_date', $this->available_date, true);
        $criteria->compare('condition', $this->condition, true);
        $criteria->compare('show_price', $this->show_price);
        $criteria->compare('indexed', $this->indexed);
        $criteria->compare('visibility', $this->visibility, true);
        $criteria->compare('cache_is_pack', $this->cache_is_pack);
        $criteria->compare('cache_has_attachments', $this->cache_has_attachments);
        $criteria->compare('is_virtual', $this->is_virtual);
        $criteria->compare('cache_default_attribute', $this->cache_default_attribute, true);
        $criteria->compare('created', $this->created);
        $criteria->compare('modified', $this->modified);
        $criteria->compare('advanced_stock_management', $this->advanced_stock_management);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Goods the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 修改商品
     * 
     * @param object $good 商品对象
     * @parma string $option 添加方式 admin--运营后台，sell--商户
     * @parma int $seller_id 商户id
     * 
     * @return bool true--添加成功，false--添加失败
     */
    public function add($good, $option = 'admin') {
        
    }

//    /**
//     * 修改商品
//     * 
//     * @param object $good 商品对象
//     * @parma string $option 添加方式 admin--运营后台，sell--商户
//     * @parma int $seller_id 商户id
//     * 
//     * @return bool true--添加成功，false--添加失败
//     */
//    public function update($id, $good, $option = 'admin', $seller_id = 0) {
//        
//    }

    /**
     * 重置类目商品顺序
     * 
     * @param object $category_id 类目编号
     * 
     * @return bool true--成功，false--失败
     */
    public static function cleanPositions($category_id) {
        
    }

    /**
     * 设置商品的有效期
     * 
     * 
     * @return bool true--成功，false--失败
     */
    public function setAvailableDate($available_date = '0000-00-00') {
        
    }

    /**
     * 得到商品的有效期
     *
     * @param int $id 商品id
     * @return object
     */
    public static function getAvailableDate($id) {
        
    }

    /**
     * 锁定商品状态.
     * 
     * @param int $id 待锁定商品id
     * 
     * @return true 成功， false 失败
     */
    public function lock($id) {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'update {{brand}} set active = 0 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 解锁商品的状态.
     * 
     * @param int $id 待解锁商品id
     * 
     * @return true 成功， false 失败
     */
    public function unlock($id) {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'update {{brand}} set active = 1 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 删除商品.
     * 
     * @param int $ids 删除商品ids
     * 
     * @return true 成功， false 失败
     */
    public function deleteByIds($ids) {
        
    }

    /**
     * 添加商品到指定类目.
     * 
     * @param int $id 商品id
     * @param int $category_ids 商品类目ids
     * 
     * @return true 成功， false 失败
     */
    public function addToCategories($id, $category_ids) {
        
    }

    /**
     * 
     * 删除商品从指定类目.
     * 
     * @param int $id 商品id
     * @param int $category_ids 商品类目ids
     * 
     * @return true 成功， false 失败
     */
    public function deleteCategories($id, $category_ids) {
        
    }

    /**
     * 删除商品标签.
     * 
     * @param int $id 商品id
     * 
     * @return true 成功， false 失败
     */
    public function deleteTags($id) {
        
    }

    /**
     * 返回产品列表
     *
     * @param int $start Start number
     * @param int $limit 
     * @param string $order_by 
     * @param bool $only_active
     * @param string $order_way  (ASC or DESC)
     * @return array Products 
     */
    public static function getList($start, $limit, $order_by, $order_way, $only_active = false) {
        
    }

    /**
     * 返回最新产品列表
     *
     * @param int $category_id 类别
     * @param int $limit 
     * @param bool $only_active
     * @return array Products 
     */
    public static function getNew($limit, $category_id = 0, $only_active = false) {
        
    }

    /**
     * 返回商品的类目信息
     *
     * @return array of categories
     */
    public function getCategories($id) {
        
    }

    /**
     * 返回商品的图片信息
     *
     * @return array of categories
     */
    public function getImages($id) {
        
    }

    /**
     * 返回商品的封面图片
     *
     * @return array of categories
     */
    public function getCovers($id) {
        
    }

}
