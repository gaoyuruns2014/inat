<?php

/**
 * This is the model class for table "tag".
 *
 * The followings are the available columns in table 'tag':
 * @property string $id
 * @property string $keyword
 * @property string $type
 * @property integer $tag_count
 * @property string $uid
 * @property string $username
 * @property string $created
 */
class Tag extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tag';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('uid, username', 'required'),
            array('tag_count', 'numerical', 'integerOnly' => true),
            array('keyword', 'length', 'max' => 20),
            array('type', 'length', 'max' => 6),
            array('uid, created', 'length', 'max' => 10),
            array('username', 'length', 'max' => 15),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, keyword, type, tag_count, uid, username, created', 'safe', 'on' => 'search'),
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
            'keyword' => '标签',
            'type' => '类型',
            'tag_count' => '标签使用数',
            'uid' => '用户id，如果为系统标签设置为0',
            'username' => '用户名 如果为系统标签设置为system',
            'created' => '创建日期',
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
        $criteria->compare('keyword', $this->keyword, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('tag_count', $this->tag_count);
        $criteria->compare('uid', $this->uid, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('created', $this->created, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tag the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 为对象添加标签
     * 
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @param string $keywords 标签，以逗号分隔
     * @param string $separator 分隔符
     * @return bool true 成功， false 失败 
     */
    public function add($object_id, $object_type, $keywords, $separator = ',') {
        
    }

    /**
     * 修改对象标签
     * 
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @param string $keywords 标签，以逗号分隔
     * @param string $separator 分隔符
     * @return bool true 成功， false 失败 
     */
    public function update($object_id, $object_type, $keywords, $separator = ',') {
        
    }

    /**
     * 为对象删除标签
     * 
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @return bool true 成功， false 失败 
     */
    public function delete($object_id, $object_type) {
        
    }

    /**
     * 得到指定用户的常用标签
     * 
     * 
     * @param int $uid 用户id
     * @param int $num 得到的标签数
     * @return array tags 
     */
    public function getByUid($uid, $num) {
        
    }

    /**
     * 得到指定分类的常用标签
     * 
     * 
     * @param int $category_id 分类id
     * @param int $num 得到的标签数
     * @return array tags 
     */
    public function getByCategoryId($category_id, $num) {
        
    }

    /**
     * 得到指定对象的标签
     * 
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @param int $num 得到的标签数
     * @return array tags 
     */
    public function getByObjectID($object_id, $object_type, $num) {
        
    }

    /**
     * 得到指定标签的相关标签
     * 
     * 
     * @param int $id 对象id
     * @return array tags 
     */
    public function getRelationByTagid($id) {
        
    }

    /**
     * 得到指定标签关联的对象数
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @return int  
     */
    public function getCountByObjectId($id) {
        
    }

    /**
     * 得到指定标签关联的对象数
     * 
     * @param int $keyword 关键词
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @return int  
     */
    public function getRelationByKeyword($keyword) {
        
    }

    /**
     * 得到热点关键词
     * 
     * @param int $num 关键词数
     * @return array  
     */
    public function getHot($num = 5) {
        
    }

    /**
     * 得到指定对象热点关键词
     * 
     * @param int $object_id 对象id
     * @param int $object_type 对象类型 1--商品， 2--文章， 3--作者
     * @param int $num 关键词数
     * @return array  
     */
    public function getHotByObjectId($object_id, $object_type, $num = 5) {
        
    }

    /**
     * 得到标签的用户列表
     * 
     * @param int $id 标签id
     * @return array  
     */
    public function getMembersById($id) {
        
    }

    /**
     * 得到标签的用户列表
     * 
     */
    private function _init() {
        
    }

    /**
     * 清除标签缓存
     * 
     * @param $key 键值
     */
    private function _clearCache($key) {
        
    }

}
