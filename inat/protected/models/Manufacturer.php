<?php

/**
 * This is the model class for table "manufacturer".
 *
 * The followings are the available columns in table 'manufacturer':
 * @property string $id
 * @property string $name
 * @property string $desc
 * @property string $admin
 * @property string $country
 * @property string $province
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $tel
 * @property string $mobile
 * @property string $logo
 * @property integer $created
 * @property integer $updated
 * @property integer $active
 */
class Manufacturer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'manufacturer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, desc, logo, created, updated', 'required'),
			array('created, updated, active', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>64),
			array('desc, logo', 'length', 'max'=>255),
			array('admin, country, province, city', 'length', 'max'=>20),
			array('address', 'length', 'max'=>100),
			array('zip', 'length', 'max'=>10),
			array('tel', 'length', 'max'=>12),
			array('mobile', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, desc, admin, country, province, city, address, zip, tel, mobile, logo, created, updated, active', 'safe', 'on'=>'search'),
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
			'name' => '名称',
			'desc' => '描述',
			'admin' => '联系人',
			'country' => '国家',
			'province' => '省份',
			'city' => '城市',
			'address' => '地址',
			'zip' => '邮编',
			'tel' => '电话',
			'mobile' => '手机',
			'logo' => 'logo',
			'created' => '创建时间',
			'updated' => '修改时间',
			'active' => '激活状态',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('admin',$this->admin,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Manufacturer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
