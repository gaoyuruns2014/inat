<?php

/**
 * This is the model class for table "cart".
 *
 * The followings are the available columns in table 'cart':
 * @property string $id
 * @property string $carrier_id
 * @property string $delivery_option
 * @property string $uid
 * @property string $secure_key
 * @property integer $recyclable
 * @property integer $gift
 * @property string $gift_message
 * @property integer $allow_seperated_package
 * @property integer $created
 * @property integer $updated
 */
class Cart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('carrier_id, delivery_option, uid, created, updated', 'required'),
			array('recyclable, gift, allow_seperated_package, created, updated', 'numerical', 'integerOnly'=>true),
			array('carrier_id, uid', 'length', 'max'=>10),
			array('secure_key', 'length', 'max'=>32),
			array('gift_message', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, carrier_id, delivery_option, uid, secure_key, recyclable, gift, gift_message, allow_seperated_package, created, updated', 'safe', 'on'=>'search'),
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
			'carrier_id' => '购物车编号',
			'delivery_option' => '物流方式',
			'uid' => '用户编号',
			'secure_key' => '密钥',
			'recyclable' => '回收状态',
			'gift' => '礼品编号',
			'gift_message' => '礼品消息',
			'allow_seperated_package' => '是否允许分包',
			'created' => '创建时间',
			'updated' => '修改时间',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('carrier_id',$this->carrier_id,true);
		$criteria->compare('delivery_option',$this->delivery_option,true);
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('secure_key',$this->secure_key,true);
		$criteria->compare('recyclable',$this->recyclable);
		$criteria->compare('gift',$this->gift);
		$criteria->compare('gift_message',$this->gift_message,true);
		$criteria->compare('allow_seperated_package',$this->allow_seperated_package);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
