<?php

/**
 * This is the model class for table "address".
 *
 * The followings are the available columns in table 'address':
 * @property string $id
 * @property string $uid
 * @property string $accept_name
 * @property string $zip
 * @property string $telphone
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $mobile
 * @property integer $default
 */
class Address extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'address';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, accept_name, province, city, area, address', 'required'),
            array('default', 'numerical', 'integerOnly' => true),
            array('uid, country, province, city, area', 'length', 'max' => 11),
            array('accept_name, telphone, mobile', 'length', 'max' => 20),
            array('zip', 'length', 'max' => 6),
            array('address', 'length', 'max' => 250),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, uid, accept_name, zip, telphone, country, province, city, area, address, mobile, default', 'safe', 'on' => 'search'),
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
            'uid' => '用户ID',
            'accept_name' => '收货人姓名',
            'zip' => '邮编',
            'telphone' => '联系电话',
            'country' => '国ID',
            'province' => '省ID',
            'city' => '市ID',
            'area' => '区ID',
            'address' => '收货地址',
            'mobile' => '手机',
            'default' => '是否默认,0:为非默认,1:默认',
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
        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('accept_name', $this->accept_name, true);
        $criteria->compare('zip', $this->zip, true);
        $criteria->compare('telphone', $this->telphone, true);
        $criteria->compare('country', $this->country, true);
        $criteria->compare('province', $this->province, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('area', $this->area, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('default', $this->default);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Address the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 添加地址
     * 
     * @param int $uid 用户编号
     * @param object $address 地址对象
     * @return bool
     */
    public static function add($uid, $address) {
        
    }

    /**
     * 修改地址
     * 
     * @param int $uid 用户编号
     * @param object $address 地址对象
     * @return bool
     */
    public static function update($uid, $address) {
        
    }

    /**
     * 修改地址
     * 
     * @param int $uid 用户编号
     * @param int $address_id 地址id
     * @return bool
     */
    public static function delete($uid, $address_id) {
        
    }

    /**
     * 锁定地址的状态.
     * 
     * @param int $id 待锁定地址id
     * 
     * @return true 成功， false 失败
     */
    public function lock($id) {
        
    }

    /**
     * 解锁地址的状态.
     * 
     * @param int $id 待解锁地址id
     * 
     * @return true 成功， false 失败
     */
    public function unlock($id) {
        
    }

    /**
     * 设置地址为缺省地址
     * 
     * @param int $uid 用户编号
     * @param int $address_id 地址id
     * @return bool
     */
    public static function setDefault($uid, $address_id) {
        
    }

    /**
     * 得到地址的邮编
     * 
     * @param int $id 用户编号
     * @return string
     */
    public static function getZipByID($id) {
        
    }

    /**
     * 得到缺省的用户地址
     * 
     * @param int $uid 用户编号
     * @return object
     */
    public static function getDefault($uid) {
        
    }

    /**
     * 是否是用户地址
     * 
     * @param int $uid 用户编号
     * @param object $address 地址对象
     * @return bool
     */
    public static function isExist($uid, $address) {
        
    }

    /**
     * 得到指定用户所有地址
     * 
     * @param int $uid 用户编号
     * @return array 
     */
    public static function getByUid($uid) {
        
    }

    /**
     * 得到所有地址
     * 
     * @return array
     */
    public static function getList() {
        
    }

    /**
     * 初始化地址
     * 
     * @return 
     */
    private function _init() {
        
    }

}
