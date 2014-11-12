<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property string $id
 * @property string $goods_id
 * @property string $order_no
 * @property string $user_id
 * @property string $time
 * @property string $comment_time
 * @property string $contents
 * @property int $point
 * @property int $status
 */
class Comment extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'comment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('goods_id, order_no, user_id, time, comment_time', 'required'),
            array('point, status', 'numerical', 'intOnly' => true),
            array('goods_id, user_id', 'length', 'max' => 11),
            array('order_no', 'length', 'max' => 20),
            array('contents', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, goods_id, order_no, user_id, time, comment_time, contents, point, status', 'safe', 'on' => 'search'),
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
            'id' => 'ID',
            'goods_id' => '商品ID',
            'order_no' => '订单编号',
            'user_id' => '用户ID',
            'time' => '购买时间',
            'comment_time' => '评论时间',
            'contents' => '评论内容',
            'point' => '评论的分数',
            'status' => '评论状态：0：未评论 1:已评论',
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
        $criteria->compare('goods_id', $this->goods_id, true);
        $criteria->compare('order_no', $this->order_no, true);
        $criteria->compare('user_id', $this->user_id, true);
        $criteria->compare('time', $this->time, true);
        $criteria->compare('comment_time', $this->comment_time, true);
        $criteria->compare('contents', $this->contents, true);
        $criteria->compare('point', $this->point);
        $criteria->compare('status', $this->status);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Comment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 添加评论
     * @param string $commentid 评论ID
     * @param int $siteid 站点ID
     * @param string $id 回复评论的内容
     * @param string $title 文章标题
     * @param string $url 文章URL地址
     */
    public function add($commentid, $siteid, $data, $id = '', $title = '', $url = '') {
        
    }

    /**
     * 回复评论
     * @param int $id    评论ID
     * @param int $object_id    对象id
     * @param int $object_type    对象类型
     */
    public function replay($id, $object_id, $object_type) {
        
    }

    /**
     * 删除评论
     * @param int $id    评论ID
     * @param int $object_id    对象id
     * 
     */
    public function delete($id, $object_id, $object_type) {
        
    }

    /**
     * 获取指定对象的评论
     * @param int $id    评论ID
     * @param int $object_id    对象id
     * 
     */
    public function getByObjectId($object_id, $object_type) {
        
    }

    /**
     * 获取指定对象的评论
     * @param int $uid    用户id
     * @return array 
     */
    public function getByUid($uid) {
        
    }

    /**
     * 获取所有评论
     * @return array 
     */
    public function getList() {
        
    }

}
