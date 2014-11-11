<?php

/**
 * This is the model class for table "spec".
 *
 * The followings are the available columns in table 'spec':
 * @property string $id
 * @property string $name
 * @property string $value
 * @property string $show_type
 * @property string $control_type
 * @property string $description
 * @property integer $is_system
 * @property integer $seller_id
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 */
class Spec extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'spec';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('is_system, seller_id, active, created, modified', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('show_type, control_type', 'length', 'max'=>20),
			array('description', 'length', 'max'=>255),
			array('value', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, value, show_type, control_type, description, is_system, seller_id, active, created, modified', 'safe', 'on'=>'search'),
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
			'name' => '规格名称',
			'value' => '规格值',
			'show_type' => '显示类型',
			'control_type' => '控件类型 1文字 2图片',
			'description' => '备注说明',
			'is_system' => '是否是系统',
			'seller_id' => '商家ID',
			'active' => '激活状态',
			'created' => '创建时间',
			'modified' => '修改时间',
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
		$criteria->compare('value',$this->value,true);
		$criteria->compare('show_type',$this->show_type,true);
		$criteria->compare('control_type',$this->control_type,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_system',$this->is_system);
		$criteria->compare('seller_id',$this->seller_id);
		$criteria->compare('active',$this->active);
		$criteria->compare('created',$this->created);
		$criteria->compare('modified',$this->modified);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Spec the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
