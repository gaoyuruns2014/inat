<?php

/**
 * This is the model class for table "seller".
 *
 * The followings are the available columns in table 'seller':
 * @property string $id
 * @property string $seller_name
 * @property string $password
 * @property string $create_time
 * @property string $login_time
 * @property integer $is_vip
 * @property integer $is_del
 * @property integer $is_lock
 * @property string $true_name
 * @property string $email
 * @property string $mobile
 * @property string $phone
 * @property string $paper_img
 * @property string $cash
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $account
 * @property string $server_num
 * @property string $home_url
 */
class Seller extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seller';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('seller_name, password, true_name, mobile, phone, province, city, area, address', 'required'),
			array('is_vip, is_del, is_lock', 'numerical', 'integerOnly'=>true),
			array('seller_name, true_name', 'length', 'max'=>80),
			array('password', 'length', 'max'=>32),
			array('email, paper_img, address, home_url', 'length', 'max'=>255),
			array('mobile, phone, server_num', 'length', 'max'=>20),
			array('cash', 'length', 'max'=>15),
			array('country, province, city, area', 'length', 'max'=>11),
			array('create_time, login_time, account', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, seller_name, password, create_time, login_time, is_vip, is_del, is_lock, true_name, email, mobile, phone, paper_img, cash, country, province, city, area, address, account, server_num, home_url', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'seller_name' => '商家登录用户名',
			'password' => '商家密码',
			'create_time' => '加入时间',
			'login_time' => '最后登录时间',
			'is_vip' => '是否是特级商家',
			'is_del' => '0:未删除,1:已删除',
			'is_lock' => '0:未锁定,1:已锁定',
			'true_name' => '商家真实名称',
			'email' => '电子邮箱',
			'mobile' => '手机号码',
			'phone' => '座机号码',
			'paper_img' => '执照证件照片',
			'cash' => '保证金',
			'country' => '国ID',
			'province' => '省ID',
			'city' => '市ID',
			'area' => '区ID',
			'address' => '地址',
			'account' => '收款账号信息',
			'server_num' => '客服号码',
			'home_url' => '企业URL网站',
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
		$criteria->compare('seller_name',$this->seller_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('login_time',$this->login_time,true);
		$criteria->compare('is_vip',$this->is_vip);
		$criteria->compare('is_del',$this->is_del);
		$criteria->compare('is_lock',$this->is_lock);
		$criteria->compare('true_name',$this->true_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('paper_img',$this->paper_img,true);
		$criteria->compare('cash',$this->cash,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('server_num',$this->server_num,true);
		$criteria->compare('home_url',$this->home_url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seller the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
