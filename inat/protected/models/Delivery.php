<?php

/**
 * This is the model class for table "delivery".
 *
 * The followings are the available columns in table 'delivery':
 * @property string $delivery_id
 * @property string $order_id
 * @property integer $member_id
 * @property string $money
 * @property string $type
 * @property string $is_protect
 * @property string $delivery
 * @property string $logi_id
 * @property string $logi_name
 * @property string $logi_no
 * @property string $ship_name
 * @property string $ship_area
 * @property string $ship_addr
 * @property string $ship_zip
 * @property string $ship_tel
 * @property string $ship_mobile
 * @property string $ship_email
 * @property string $t_begin
 * @property string $t_end
 * @property string $op_name
 * @property string $status
 * @property string $memo
 * @property integer $active
 * @property string $supplier_id
 * @property string $supplier_delivery_id
 */
class Delivery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'delivery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('member_id, active', 'numerical', 'integerOnly'=>true),
			array('order_id, money, delivery, ship_zip', 'length', 'max'=>20),
			array('type, status', 'length', 'max'=>8),
			array('is_protect', 'length', 'max'=>5),
			array('logi_id, logi_no, ship_name, ship_mobile, op_name', 'length', 'max'=>50),
			array('logi_name, ship_addr', 'length', 'max'=>100),
			array('ship_area', 'length', 'max'=>255),
			array('ship_tel, supplier_delivery_id', 'length', 'max'=>30),
			array('ship_email', 'length', 'max'=>150),
			array('t_begin, t_end, supplier_id', 'length', 'max'=>10),
			array('memo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('delivery_id, order_id, member_id, money, type, is_protect, delivery, logi_id, logi_name, logi_no, ship_name, ship_area, ship_addr, ship_zip, ship_tel, ship_mobile, ship_email, t_begin, t_end, op_name, status, memo, active, supplier_id, supplier_delivery_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'delivery_id' => '编号',
			'order_id' => '订单号',
			'member_id' => '会员号',
			'money' => '金额',
			'type' => '类型: 退货/正常投递',
			'is_protect' => '保险状态',
			'delivery' => '物流公司',
			'logi_id' => '物流单id',
			'logi_name' => '名称',
			'logi_no' => '物流单编号',
			'ship_name' => '收货人',
			'ship_area' => '收货地区',
			'ship_addr' => '地址',
			'ship_zip' => '邮编',
			'ship_tel' => '电话',
			'ship_mobile' => '手机',
			'ship_email' => 'email',
			't_begin' => '开始时间',
			't_end' => '结束时间',
			'op_name' => '编号',
			'status' => '状态',
			'memo' => '备注',
			'active' => '是否激活 0 否，1是',
			'supplier_id' => '供货商id',
			'supplier_delivery_id' => '供货商物流id',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('delivery_id',$this->delivery_id,true);
		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('member_id',$this->member_id);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('is_protect',$this->is_protect,true);
		$criteria->compare('delivery',$this->delivery,true);
		$criteria->compare('logi_id',$this->logi_id,true);
		$criteria->compare('logi_name',$this->logi_name,true);
		$criteria->compare('logi_no',$this->logi_no,true);
		$criteria->compare('ship_name',$this->ship_name,true);
		$criteria->compare('ship_area',$this->ship_area,true);
		$criteria->compare('ship_addr',$this->ship_addr,true);
		$criteria->compare('ship_zip',$this->ship_zip,true);
		$criteria->compare('ship_tel',$this->ship_tel,true);
		$criteria->compare('ship_mobile',$this->ship_mobile,true);
		$criteria->compare('ship_email',$this->ship_email,true);
		$criteria->compare('t_begin',$this->t_begin,true);
		$criteria->compare('t_end',$this->t_end,true);
		$criteria->compare('op_name',$this->op_name,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('memo',$this->memo,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('supplier_id',$this->supplier_id,true);
		$criteria->compare('supplier_delivery_id',$this->supplier_delivery_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Delivery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
