<?php

/**
 * This is the model class for table "supplier".
 *
 * The followings are the available columns in table 'supplier':
 * @property string $id
 * @property string $name
 * @property string $desc
 * @property string $logo
 * @property integer $created
 * @property integer $updated
 * @property integer $active
 */
class Supplier extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'supplier';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, desc, logo, created, updated', 'required'),
            array('created, updated, active', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 64),
            array('desc, logo', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, desc, logo, created, updated, active', 'safe', 'on' => 'search'),
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
            'desc' => '描述',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('logo', $this->logo, true);
        $criteria->compare('created', $this->created);
        $criteria->compare('updated', $this->updated);
        $criteria->compare('active', $this->active);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Supplier the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 锁定供应商状态.
     * 
     * @param int $id 待锁定供应商id
     * 
     * @return true 成功， false 失败
     */
    public function lock($id) {
        //设置供应商的激活状态为0，即锁定状态
        $sql = 'update {{supplier}}} set active = 0 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 解锁供应商的状态.
     * 
     * @param int $id 待解锁供应商id
     * 
     * @return true 成功， false 失败
     */
    public function unlock($id) {
        //设置供应商的激活状态为0，即锁定状态
        $sql = 'update {{supplier}}} set active = 1 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 返回所有供应商信息.
     * 
     * @return CActiveRecord 包含所有供应商的内
     */
    public function listAll() {
        //设置供应商的激活状态为0，即锁定状态
        $sql = 'select * from {{supplier}}}';
        return $this->findAllBySql($sql);
    }

    /**
     * 返回所有有效供应商信息.
     * 
     * @return CActiveRecord 对象数组，包含所有供应商的内容
     */
    public function listActive() {
        //设置供应商的激活状态为0，即锁定状态
        $sql = 'select * from {{supplier}}} where active = 1 order by sort';
        return $this->findAllBySql($sql);
    }

}
