<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property string $id
 * @property string $order_no
 * @property string $user_id
 * @property integer $pay_type
 * @property integer $distribution
 * @property integer $status
 * @property integer $pay_status
 * @property integer $distribution_status
 * @property string $accept_name
 * @property string $postcode
 * @property string $telphone
 * @property integer $country
 * @property integer $province
 * @property integer $city
 * @property integer $area
 * @property string $address
 * @property string $mobile
 * @property string $payable_amount
 * @property string $real_amount
 * @property string $payable_freight
 * @property string $real_freight
 * @property string $pay_time
 * @property string $send_time
 * @property string $create_time
 * @property string $completion_time
 * @property integer $invoice
 * @property string $postscript
 * @property string $note
 * @property integer $if_del
 * @property string $insured
 * @property integer $if_insured
 * @property string $pay_fee
 * @property string $invoice_title
 * @property string $taxes
 * @property string $promotions
 * @property string $discount
 * @property string $order_amount
 * @property string $if_print
 * @property string $prop
 * @property string $accept_time
 * @property integer $exp
 * @property integer $point
 * @property integer $type
 * @property string $trade_no
 */
class Order extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'order';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('order_no, user_id, pay_type, accept_name', 'required'),
            array('pay_type, distribution, status, pay_status, distribution_status, country, province, city, area, invoice, if_del, if_insured, exp, point, type', 'numerical', 'integerOnly' => true),
            array('order_no, accept_name, telphone, mobile', 'length', 'max' => 20),
            array('user_id', 'length', 'max' => 11),
            array('postcode', 'length', 'max' => 6),
            array('address', 'length', 'max' => 250),
            array('payable_amount, real_amount, payable_freight, real_freight, insured, pay_fee, taxes, promotions, discount, order_amount', 'length', 'max' => 15),
            array('postscript, if_print, prop, trade_no', 'length', 'max' => 255),
            array('invoice_title', 'length', 'max' => 100),
            array('accept_time', 'length', 'max' => 80),
            array('pay_time, send_time, create_time, completion_time, note', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, order_no, user_id, pay_type, distribution, status, pay_status, distribution_status, accept_name, postcode, telphone, country, province, city, area, address, mobile, payable_amount, real_amount, payable_freight, real_freight, pay_time, send_time, create_time, completion_time, invoice, postscript, note, if_del, insured, if_insured, pay_fee, invoice_title, taxes, promotions, discount, order_amount, if_print, prop, accept_time, exp, point, type, trade_no', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'order_no' => '订单号',
            'user_id' => '用户ID',
            'pay_type' => '支付方式ID,当为0时表示货到付款',
            'distribution' => '配送ID',
            'status' => '订单状态 1生成订单,2支付订单,3取消订单,4作废订单,5完成订单',
            'pay_status' => '支付状态 0：未支付，1：已支付，2：退款',
            'distribution_status' => '配送状态 0：未发送,1：已发送,2：部分发送',
            'accept_name' => '收货人姓名',
            'postcode' => '邮编',
            'telphone' => '联系电话',
            'country' => '国ID',
            'province' => '省ID',
            'city' => '市ID',
            'area' => '区ID',
            'address' => '收货地址',
            'mobile' => '手机',
            'payable_amount' => '应付商品总金额',
            'real_amount' => '实付商品总金额',
            'payable_freight' => '总运费金额',
            'real_freight' => '实付运费',
            'pay_time' => '付款时间',
            'send_time' => '发货时间',
            'create_time' => '下单时间',
            'completion_time' => '订单完成时间',
            'invoice' => '发票：0不索要1索要',
            'postscript' => '用户附言',
            'note' => '管理员备注',
            'if_del' => '是否删除1为删除',
            'insured' => '保价',
            'if_insured' => '是否保价0:不保价，1保价',
            'pay_fee' => '支付手续费',
            'invoice_title' => '发票抬头',
            'taxes' => '税金',
            'promotions' => '促销优惠金额',
            'discount' => '订单折扣或涨价',
            'order_amount' => '订单总金额',
            'if_print' => '已打印的类型,类型的代码以逗号进行分割; shop购物单,pick配货单,merge购物和配货,express快递单',
            'prop' => '使用的道具id',
            'accept_time' => '用户收货时间',
            'exp' => '增加的经验',
            'point' => '增加的积分',
            'type' => '0普通订单,1团购订单,2限时抢购',
            'trade_no' => '支付平台交易号',
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
        $criteria->compare('order_no', $this->order_no, true);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('pay_type', $this->pay_type);
        $criteria->compare('distribution', $this->distribution);
        $criteria->compare('status', $this->status);
        $criteria->compare('pay_status', $this->pay_status);
        $criteria->compare('distribution_status', $this->distribution_status);
        $criteria->compare('accept_name', $this->accept_name, true);
        $criteria->compare('postcode', $this->postcode, true);
        $criteria->compare('telphone', $this->telphone, true);
        $criteria->compare('country', $this->country);
        $criteria->compare('province', $this->province);
        $criteria->compare('city', $this->city);
        $criteria->compare('area', $this->area);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('payable_amount', $this->payable_amount, true);
        $criteria->compare('real_amount', $this->real_amount, true);
        $criteria->compare('payable_freight', $this->payable_freight, true);
        $criteria->compare('real_freight', $this->real_freight, true);
        $criteria->compare('pay_time', $this->pay_time, true);
        $criteria->compare('send_time', $this->send_time, true);
        $criteria->compare('create_time', $this->create_time, true);
        $criteria->compare('completion_time', $this->completion_time, true);
        $criteria->compare('invoice', $this->invoice);
        $criteria->compare('postscript', $this->postscript, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('if_del', $this->if_del);
        $criteria->compare('insured', $this->insured, true);
        $criteria->compare('if_insured', $this->if_insured);
        $criteria->compare('pay_fee', $this->pay_fee, true);
        $criteria->compare('invoice_title', $this->invoice_title, true);
        $criteria->compare('taxes', $this->taxes, true);
        $criteria->compare('promotions', $this->promotions, true);
        $criteria->compare('discount', $this->discount, true);
        $criteria->compare('order_amount', $this->order_amount, true);
        $criteria->compare('if_print', $this->if_print, true);
        $criteria->compare('prop', $this->prop, true);
        $criteria->compare('accept_time', $this->accept_time, true);
        $criteria->compare('exp', $this->exp);
        $criteria->compare('point', $this->point);
        $criteria->compare('type', $this->type);
        $criteria->compare('trade_no', $this->trade_no, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Order the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 产生订单
     * 
     * @param objct $order 订单对象
     * 
     * @return true 成功， false 失败
     */
    function createOrder($order, $sell_id = 0) {
        
    }

    /**
     * 删除订单
     * 
     * @param int $id 订单id
     * 
     * @return true 成功， false 失败
     */
    function delete($id) {
        
    }

    /**
     * 修改订单
     * 
     * @param object $order 订单id
     * 
     * @return true 成功， false 失败
     */
    function update($order, $sell_id = 0) {
        
    }

    /**
     * 支付成功后修改订单状态
     * @param string $orderNo   订单编号
     * @param int $status    订单状态
     * @param int $admin_id     管理员ID
     * @param string $note      收款的备注
     * @return false or int order_id
     */
    public function updateStatus($orderNo, $admin_id = '', $note = '') {
        
    }

    /**
     * 更新订单库存
     * @param $order_id 订单ID
     */
    public function updateStore($order_id, $type = 'add') {
        
    }

    /**
     * @brief 更新订单商品
     * @param $order_id 订单ID
     * @param $goodsInfo 商品和货品信息（购物车数据结构,countSum 最终生成的格式）
     */
    public function updateGoods($order_id, $goodsResult = array()) {
        
    }

    /**
     * 列出订单
     * 
     * @param int $sell_id 商户id
     * @return array
     */
    function listAll($sell_id = 0) {
        
    }

    /**
     * 显示订单详情
     * 
     * @param int $id 订单编号
     * @return object
     */
    function getByID($id) {
        
    }

    /**
     * 获取订单状态
     * @param $orderRow array('status' => '订单状态','pay_type' => '支付方式ID','distribution_status' => '配送状态','pay_status' => '支付状态')
     * @return int 订单状态值 0:未知;1:未付款等待发货;2:等待付款;3:已发货;4:已付款等待发货;5:已取消;6:已完成;7:已退款;
     */
    public static function getStatus($id) {
        
    }

    /**
     * 列出商户所属订单
     * 
     * @param int $sell_id 商户id
     * @return array
     */
    function getBySellId($sell_id) {
        
    }

    /**
     * 得到订单用户id
     * 
     * @param int $id 订单编号
     * @return array
     */
    function getMemberID($id) {
        
    }

    /**
     * 得到订单用户
     * 
     * @param int $id 订单编号
     * @return array
     */
    function getMember($id) {
        
    }

    /**
     * 得到订单的总价
     * 
     * @param int $id 订单编号
     * @return 
     */
    private function _getSummary($id) {
        
    }

    /**
     * 得到订单历史状态
     * 
     * @param int $id 订单编号
     * @return 
     */
    private function _getStatusHistory() {
        
    }

    /**
     * 得到订单产品列表
     * 
     * @param int $id 订单编号
     * @return 
     */
    function _getgoods() {
        
    }

    /**
     * 得到订单物流公司
     * 
     * @param int $id 订单编号
     * @return 
     */
    function getDelivery($id = '') {
        
    }

    /**
     * 得到订单支付方式
     * 
     * @param int $id 订单编号
     * @return 
     */
    function getPaymentMethod() {
        
    }

}
