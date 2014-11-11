<?php

/**
 * This is the model class for table "delivery_type".
 *
 * The followings are the available columns in table 'delivery_type':
 * @property integer $id
 * @property string $dt_name
 * @property string $dt_config
 * @property string $dt_expressions
 * @property string $detail
 * @property string $price
 * @property string $type
 * @property integer $gateway
 * @property string $protect
 * @property double $protect_rate
 * @property integer $ordernum
 * @property string $has_cod
 * @property double $minprice
 * @property integer $active
 * @property string $corp_id
 * @property string $dt_status
 */
class DeliveryType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'delivery_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price', 'required'),
			array('gateway, ordernum, active', 'numerical', 'integerOnly'=>true),
			array('protect_rate, minprice', 'numerical'),
			array('dt_name', 'length', 'max'=>50),
			array('type, protect, has_cod, dt_status', 'length', 'max'=>1),
			array('corp_id', 'length', 'max'=>10),
			array('dt_config, dt_expressions, detail', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, dt_name, dt_config, dt_expressions, detail, price, type, gateway, protect, protect_rate, ordernum, has_cod, minprice, active, corp_id, dt_status', 'safe', 'on'=>'search'),
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
			'id' => '编号',
			'dt_name' => '物流类型名',
			'dt_config' => '配置信息',
			'dt_expressions' => '表达式',
			'detail' => '介绍',
			'price' => '价格',
			'type' => '类型',
			'gateway' => '网关接口',
			'protect' => '是否有保险',
			'protect_rate' => '保险费率',
			'ordernum' => '排序',
			'has_cod' => '是否有物流码',
			'minprice' => '最小价格',
			'active' => '是否激活 0 否，1是',
			'corp_id' => '公司id',
			'dt_status' => '状态',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('dt_name',$this->dt_name,true);
		$criteria->compare('dt_config',$this->dt_config,true);
		$criteria->compare('dt_expressions',$this->dt_expressions,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('gateway',$this->gateway);
		$criteria->compare('protect',$this->protect,true);
		$criteria->compare('protect_rate',$this->protect_rate);
		$criteria->compare('ordernum',$this->ordernum);
		$criteria->compare('has_cod',$this->has_cod,true);
		$criteria->compare('minprice',$this->minprice);
		$criteria->compare('active',$this->active);
		$criteria->compare('corp_id',$this->corp_id,true);
		$criteria->compare('dt_status',$this->dt_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeliveryType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
