<?php

/**
 * This is the model class for table "brand".
 *
 * The followings are the available columns in table 'brand':
 * @property string $id
 * @property string $name
 * @property string $logo
 * @property string $url
 * @property string $description
 * @property integer $sort
 * @property string $category_ids
 * @property integer $active
 * @property integer $created
 * @property integer $modified
 */
class Brand extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'brand';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, category_ids, created', 'required'),
            array('sort, active, created, modified', 'numerical', 'integerOnly' => true),
            array('name, logo, url, category_ids', 'length', 'max' => 255),
            array('description', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, logo, url, description, sort, category_ids, active, created, modified', 'safe', 'on' => 'search'),
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
            'id' => '品牌ID',
            'name' => '品牌名称',
            'logo' => 'logo地址',
            'url' => '网址',
            'description' => '描述',
            'sort' => '排序',
            'category_ids' => '品牌分类分类,逗号分割id ',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('logo', $this->logo, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('sort', $this->sort);
        $criteria->compare('category_ids', $this->category_ids, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('created', $this->created);
        $criteria->compare('modified', $this->modified);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Brand the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 锁定品牌的状态.
     * 
     * @param int $id 待锁定品牌id
     * 
     * @return true 成功， false 失败
     */
    public function lock($id) {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'update {{brand}} set active = 0 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 解锁品牌的状态.
     * 
     * @param int $id 待解锁品牌id
     * 
     * @return true 成功， false 失败
     */
    public function unlock($id) {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'update {{brand}} set active = 1 where id = ' . $id;
        return $this->findBySql($sql);
    }

    /**
     * 返回所有品牌信息.
     * 
     * @return CActiveRecord 包含所有品牌的内
     */
    public function listAll() {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'select * from {{brand}}';
        return $this->findAllBySql($sql);
    }

    /**
     * 返回所有有效品牌信息.
     * 
     * @return CActiveRecord 对象数组，包含所有品牌的内容
     */
    public function listActive() {
        //设置品牌的激活状态为0，即锁定状态
        $sql = 'select * from {{brand}} where active = 1 order by sort';
        return $this->findAllBySql($sql);
    }

}
