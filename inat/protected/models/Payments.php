<?php

/**
 * This is the model class for table "payments".
 *
 * The followings are the available columns in table 'payments':
 * @property string $payment_id
 * @property string $order_id
 * @property string $uid
 * @property string $account
 * @property string $bank
 * @property string $pay_account
 * @property string $currency
 * @property string $money
 * @property string $paycost
 * @property string $cur_money
 * @property string $pay_type
 * @property integer $payment
 * @property string $paymethod
 * @property integer $op_id
 * @property string $ip
 * @property string $t_begin
 * @property string $t_end
 * @property string $status
 * @property string $memo
 * @property integer $active
 * @property string $trade_no
 */
class Payments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('payment, op_id, active', 'numerical', 'integerOnly'=>true),
			array('payment_id, order_id, money, paycost, cur_money, ip', 'length', 'max'=>20),
			array('uid', 'length', 'max'=>11),
			array('account, bank, pay_account', 'length', 'max'=>50),
			array('currency, t_begin, t_end', 'length', 'max'=>10),
			array('pay_type, status', 'length', 'max'=>8),
			array('paymethod', 'length', 'max'=>100),
			array('trade_no', 'length', 'max'=>30),
			array('memo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('payment_id, order_id, uid, account, bank, pay_account, currency, money, paycost, cur_money, pay_type, payment, paymethod, op_id, ip, t_begin, t_end, status, memo, active, trade_no', 'safe', 'on'=>'search'),
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
			'payment_id' => '支付id',
			'order_id' => '订单id',
			'uid' => '会员id',
			'account' => '账号',
			'bank' => '银行',
			'pay_account' => '付款账号',
			'currency' => '货币类型',
			'money' => '金额',
			'paycost' => '手续费',
			'cur_money' => '本国货币价值',
			'pay_type' => '类型',
			'payment' => '支付方式id',
			'paymethod' => '支付方式',
			'op_id' => '操作',
			'ip' => 'ip',
			't_begin' => '开始时间',
			't_end' => '结束时间',
			'status' => '支付状态',
			'memo' => '备注',
			'active' => '是否激活 0 否，1是',
			'trade_no' => '交易号',
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

		$criteria->compare('payment_id',$this->payment_id,true);
		$criteria->compare('order_id',$this->order_id,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('bank',$this->bank,true);
		$criteria->compare('pay_account',$this->pay_account,true);
		$criteria->compare('currency',$this->currency,true);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('paycost',$this->paycost,true);
		$criteria->compare('cur_money',$this->cur_money,true);
		$criteria->compare('pay_type',$this->pay_type,true);
		$criteria->compare('payment',$this->payment);
		$criteria->compare('paymethod',$this->paymethod,true);
		$criteria->compare('op_id',$this->op_id);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('t_begin',$this->t_begin,true);
		$criteria->compare('t_end',$this->t_end,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('memo',$this->memo,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('trade_no',$this->trade_no,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Payments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
