<?php

/**
 * This is the model class for table "payment_type".
 *
 * The followings are the available columns in table 'payment_type':
 * @property integer $id
 * @property string $name
 * @property string $pay_type
 * @property string $config
 * @property string $fee
 * @property string $desc
 * @property integer $ordernum
 * @property integer $active
 * @property integer $orderlist
 */
class PaymentType extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'payment_type';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ordernum, active, orderlist', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 100),
            array('pay_type', 'length', 'max' => 30),
            array('fee', 'length', 'max' => 9),
            array('config, desc', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, pay_type, config, fee, desc, ordernum, active, orderlist', 'safe', 'on' => 'search'),
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
            'id' => '编号',
            'name' => '名称',
            'pay_type' => '支付类型',
            'config' => '配置信息',
            'fee' => '费率',
            'desc' => '描述',
            'ordernum' => '排序',
            'active' => '是否激活 0 否，1是',
            'orderlist' => '显示排序',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('pay_type', $this->pay_type, true);
        $criteria->compare('config', $this->config, true);
        $criteria->compare('fee', $this->fee, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('ordernum', $this->ordernum);
        $criteria->compare('active', $this->active);
        $criteria->compare('orderlist', $this->orderlist);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PaymentType the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @brief 添加支付配置信息
     * @return bool
     */
    public function add($payment_type) {
        
    }

    /**
     * @brief 删除支付类型
     * @return bool
     */
    public function delete($id) {
        
    }

    /**
     * @brief 解锁支付类型
     * @return bool
     */
    public function unlock($id) {
        
    }

    /**
     * @brief 锁定支付类型
     * @return bool
     */
    public function lock($id) {
        
    }

    /**
     * @brief 得到支付类型列表
     * @return array
     */
    public function getList() {
        
    }

    /**
     * @brief 修改支付配置信息
     * @return bool
     */
    public function update($payment_type) {
        
    }

    /**
     * @brief 根据支付方式配置编号  获取该支付详细配置信息
     * @param int $id     支付方式ID
     * @param string $key         字段
     * @return 返回支付插件类对象
     */
    public function getById($id, $key = '') {
        
    }

    /**
     * @brief 根据支付方式配置编号  获取该插件的配置信息
     * @param int $id int    支付方式ID
     * @param string $key   字段
     * @return 返回支付插件类对象
     */
    public function getConfig($id, $key = '') {
        
    }

    /**
     * 初始化对象
     * @return 返回支付插件类对象
     */
    private function _init($payment_id) {
        
    }

}
