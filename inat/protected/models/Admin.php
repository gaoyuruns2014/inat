<?php

/**
 * This is the model class for table "admin".
 *
 * The followings are the available columns in table 'admin':
 * @property string $id
 * @property string $name
 * @property string $password
 * @property string $role_id
 * @property integer $created
 * @property string $email
 * @property string $last_ip
 * @property string $last_time
 * @property integer $is_del
 */
class Admin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'admin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, password, role_id', 'required'),
			array('created, is_del', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>20),
			array('password', 'length', 'max'=>32),
			array('role_id', 'length', 'max'=>11),
			array('email', 'length', 'max'=>255),
			array('last_ip', 'length', 'max'=>30),
			array('last_time', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, password, role_id, created, email, last_ip, last_time, is_del', 'safe', 'on'=>'search'),
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
			'id' => '管理员ID',
			'name' => '用户名',
			'password' => '密码',
			'role_id' => '角色ID',
			'created' => '创建时间',
			'email' => 'Email',
			'last_ip' => '最后登录IP',
			'last_time' => '最后登录时间',
			'is_del' => '删除状态 1删除,0正常',
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
		$criteria->compare('password',$this->password,true);
		$criteria->compare('role_id',$this->role_id,true);
		$criteria->compare('created',$this->created);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('last_ip',$this->last_ip,true);
		$criteria->compare('last_time',$this->last_time,true);
		$criteria->compare('is_del',$this->is_del);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Admin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
