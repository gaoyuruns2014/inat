<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property string $id
 * @property string $shop_id
 * @property string $name
 * @property string $password
 * @property string $medal_id
 * @property integer $sex
 * @property string $regip
 * @property string $reg_ip_port
 * @property string $regdate
 * @property string $location
 * @property string $last_location
 * @property string $lastip
 * @property string $last_ip_port
 * @property string $lastactivity
 * @property string $lastpost
 * @property integer $credits
 * @property integer $extcredits1
 * @property integer $extcredits2
 * @property integer $extcredits3
 * @property string $email
 * @property integer $email_checked
 * @property string $mobile
 * @property string $qq
 * @property string $msn
 * @property string $aboutme
 * @property integer $aboutmetime
 * @property string $signature
 * @property integer $signtime
 * @property string $bday
 * @property string $face
 * @property string $tag
 * @property integer $use_tag_count
 * @property integer $create_tag_count
 * @property integer $group_id
 * @property string $group_type
 * @property string $media_count
 * @property integer $invite_uid
 * @property integer $invite_count
 * @property string $invitecode
 * @property integer $topic_count
 * @property integer $at_count
 * @property integer $follow_count
 * @property integer $fans_count
 * @property string $digcount
 * @property integer $dig_new
 * @property integer $at_new
 * @property integer $comment_new
 * @property integer $fans_new
 * @property integer $vote_new
 * @property integer $topic_new
 * @property integer $topic_favor_count
 * @property integer $notice_at
 * @property integer $notice_reply
 * @property integer $notice_fans
 * @property integer $last_topic_id
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $street
 * @property string $note
 * @property integer $active
 * @property integer $deleted
 * @property integer $created
 * @property integer $modified
 * @property string $salt
 */
class Members extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'members';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name, password, invite_uid, created, modified, salt', 'required'),
            array('sex, credits, extcredits1, extcredits2, extcredits3, email_checked, aboutmetime, signtime, use_tag_count, create_tag_count, group_id, invite_uid, invite_count, topic_count, at_count, follow_count, fans_count, dig_new, at_new, comment_new, fans_new, vote_new, topic_new, topic_favor_count, notice_at, notice_reply, notice_fans, last_topic_id, active, deleted, created, modified', 'numerical', 'integerOnly' => true),
            array('shop_id', 'length', 'max' => 11),
            array('name, password', 'length', 'max' => 32),
            array('medal_id', 'length', 'max' => 20),
            array('regip, lastip, mobile', 'length', 'max' => 15),
            array('reg_ip_port, last_ip_port, group_type', 'length', 'max' => 6),
            array('regdate, lastactivity, lastpost, qq, media_count, digcount, salt', 'length', 'max' => 10),
            array('location, last_location, aboutme, tag', 'length', 'max' => 255),
            array('email, msn', 'length', 'max' => 50),
            array('signature', 'length', 'max' => 30),
            array('face', 'length', 'max' => 60),
            array('invitecode, province, city, area, street', 'length', 'max' => 16),
            array('bday, note', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, shop_id, name, password, medal_id, sex, regip, reg_ip_port, regdate, location, last_location, lastip, last_ip_port, lastactivity, lastpost, credits, extcredits1, extcredits2, extcredits3, email, email_checked, mobile, qq, msn, aboutme, aboutmetime, signature, signtime, bday, face, tag, use_tag_count, create_tag_count, group_id, group_type, media_count, invite_uid, invite_count, invitecode, topic_count, at_count, follow_count, fans_count, digcount, dig_new, at_new, comment_new, fans_new, vote_new, topic_new, topic_favor_count, notice_at, notice_reply, notice_fans, last_topic_id, province, city, area, street, note, active, deleted, created, modified, salt', 'safe', 'on' => 'search'),
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
            'id' => '用户编号',
            'shop_id' => '商店编号',
            'name' => '会员名',
            'password' => '用户密码',
            'medal_id' => '徽章id',
            'sex' => '性别',
            'regip' => '注册ip',
            'reg_ip_port' => '注册端口',
            'regdate' => '注册时间',
            'location' => '当前位置(序列化数组,保存经纬度，以及物理位置',
            'last_location' => '最近位置(序列化数组,保存经纬度，以及物理位置',
            'lastip' => '最近ip',
            'last_ip_port' => '最近ip端口',
            'lastactivity' => '最近活动',
            'lastpost' => '最近提交信息id',
            'credits' => '积分',
            'extcredits1' => '积分1',
            'extcredits2' => '积分2',
            'extcredits3' => '积分3',
            'email' => 'email地址',
            'email_checked' => 'email验证状态',
            'mobile' => '手机号',
            'qq' => 'QQ',
            'msn' => 'MSN',
            'aboutme' => '个人简介',
            'aboutmetime' => '产生简介时间',
            'signature' => '个人签名',
            'signtime' => '个人签名时间',
            'bday' => '生日',
            'face' => '头像',
            'tag' => '标签(使用|进行分割)',
            'use_tag_count' => '标签数',
            'create_tag_count' => '产生标签数',
            'group_id' => '级别id',
            'group_type' => '级别类型(admin--管理员,normal--普通)',
            'media_count' => '上传媒体数',
            'invite_uid' => '邀请用户uid',
            'invite_count' => '邀请数量',
            'invitecode' => '邀请码',
            'topic_count' => '发布信息数',
            'at_count' => '转发信息数',
            'follow_count' => 'follow数',
            'fans_count' => '粉丝数',
            'digcount' => '顶数',
            'dig_new' => '新顶数量',
            'at_new' => '新转发数',
            'comment_new' => '新评价数',
            'fans_new' => '新粉丝数',
            'vote_new' => '新投票数',
            'topic_new' => '新信息数',
            'topic_favor_count' => '信息收藏数',
            'notice_at' => '转发提醒数',
            'notice_reply' => '回复提醒数',
            'notice_fans' => '粉丝提醒数',
            'last_topic_id' => '最后信息id',
            'province' => '所属省份',
            'city' => '所属城市',
            'area' => '地区',
            'street' => '街道',
            'note' => '个人简介',
            'active' => '锁定状态',
            'deleted' => '删除状态',
            'created' => '创建时间',
            'modified' => '修改时间',
            'salt' => 'salt',
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
        $criteria->compare('shop_id', $this->shop_id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('medal_id', $this->medal_id, true);
        $criteria->compare('sex', $this->sex);
        $criteria->compare('regip', $this->regip, true);
        $criteria->compare('reg_ip_port', $this->reg_ip_port, true);
        $criteria->compare('regdate', $this->regdate, true);
        $criteria->compare('location', $this->location, true);
        $criteria->compare('last_location', $this->last_location, true);
        $criteria->compare('lastip', $this->lastip, true);
        $criteria->compare('last_ip_port', $this->last_ip_port, true);
        $criteria->compare('lastactivity', $this->lastactivity, true);
        $criteria->compare('lastpost', $this->lastpost, true);
        $criteria->compare('credits', $this->credits);
        $criteria->compare('extcredits1', $this->extcredits1);
        $criteria->compare('extcredits2', $this->extcredits2);
        $criteria->compare('extcredits3', $this->extcredits3);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('email_checked', $this->email_checked);
        $criteria->compare('mobile', $this->mobile, true);
        $criteria->compare('qq', $this->qq, true);
        $criteria->compare('msn', $this->msn, true);
        $criteria->compare('aboutme', $this->aboutme, true);
        $criteria->compare('aboutmetime', $this->aboutmetime);
        $criteria->compare('signature', $this->signature, true);
        $criteria->compare('signtime', $this->signtime);
        $criteria->compare('bday', $this->bday, true);
        $criteria->compare('face', $this->face, true);
        $criteria->compare('tag', $this->tag, true);
        $criteria->compare('use_tag_count', $this->use_tag_count);
        $criteria->compare('create_tag_count', $this->create_tag_count);
        $criteria->compare('group_id', $this->group_id);
        $criteria->compare('group_type', $this->group_type, true);
        $criteria->compare('media_count', $this->media_count, true);
        $criteria->compare('invite_uid', $this->invite_uid);
        $criteria->compare('invite_count', $this->invite_count);
        $criteria->compare('invitecode', $this->invitecode, true);
        $criteria->compare('topic_count', $this->topic_count);
        $criteria->compare('at_count', $this->at_count);
        $criteria->compare('follow_count', $this->follow_count);
        $criteria->compare('fans_count', $this->fans_count);
        $criteria->compare('digcount', $this->digcount, true);
        $criteria->compare('dig_new', $this->dig_new);
        $criteria->compare('at_new', $this->at_new);
        $criteria->compare('comment_new', $this->comment_new);
        $criteria->compare('fans_new', $this->fans_new);
        $criteria->compare('vote_new', $this->vote_new);
        $criteria->compare('topic_new', $this->topic_new);
        $criteria->compare('topic_favor_count', $this->topic_favor_count);
        $criteria->compare('notice_at', $this->notice_at);
        $criteria->compare('notice_reply', $this->notice_reply);
        $criteria->compare('notice_fans', $this->notice_fans);
        $criteria->compare('last_topic_id', $this->last_topic_id);
        $criteria->compare('province', $this->province, true);
        $criteria->compare('city', $this->city, true);
        $criteria->compare('area', $this->area, true);
        $criteria->compare('street', $this->street, true);
        $criteria->compare('note', $this->note, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('deleted', $this->deleted);
        $criteria->compare('created', $this->created);
        $criteria->compare('modified', $this->modified);
        $criteria->compare('salt', $this->salt, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Members the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 添加会员，主要是通过运营后台和用户注册方式来添加.
     * 
     * @param CActiveRecord $member 会员对象
     * @return bool true--添加成功，false--添加失败
     */
    public function add($member) {
        return true;
    }

    /**
     * 修改会员，修改会员信息，包括基本信息和主要信息
     * 
     * @param CActiveRecord $member 会员对象
     * @return bool true--修改成功，false--修改失败
     */
    public function modify($member) {
        return true;
    }

    /**
     * 删除会员，管理后台来对用户进行软删除
     * 
     * @param int $id 会员编号
     * @return bool true--修改成功，false--修改失败
     */
    public function delete($id) {
        return true;
    }

    /**
     * 返回会员列表，在管理后台对用户进行管理
     * 
     * @param int $id 会员编号
     * @return array 会员对象数组
     */
    public function getAll() {
        return null;
    }

    /**
     * 根据Email返回制定会员信息
     * 
     * @param string $email email地址
     * @return object 会员对象实例
     */
    public function getByEmail($email) {
        return null;
    }

    /**
     * 判断会员是否被锁定
     * 
     * @param int $uid 会员编号
     * @return bool true--锁定状态  false--未锁定
     */
    public function isBanned($uid) {
        return false;
    }

    /**
     * 判断会员是否被锁定
     * 
     * @param string $email 会员Email
     * @param bool $return_id 是否返回id
     * @return bool true--存在， false--不存在， id--用户id
     */
    public function isExistsByEmail($email, $return_id = false) {
        return false;
    }

    /**
     * 判断会员是否被锁定
     * 
     * @param int $uid 会员编号
     * @return bool true--存在， false--不存在
     */
    public function isExists($uid) {
        return false;
    }

    /**
     * 得到所有用户的地址列表
     *
     * @param int $uid 用户id
     * @param int $address_id 地址id
     * @return array address
     */
    public static function getAddress($uid) {
        
    }

    /**
     * 统计一个用户的地址数
     *
     * @param int $uid 用户编号
     * @return int 地址数
     */
    public static function getAddressCountById($uid) {
        
    }

    /**
     * 校验用户密码是否匹配
     *
     * @param int uid 用户编号
     * @param string $password 密码
     * @return boolean result
     */
    public static function checkPassword($uid, $password) {
        
    }

    /**
     * 通过用户名搜索用户
     *
     * @param string $name 用户名
     * @return array members
     */
    public static function searchByName($name) {
        
    }

    /**
     * 通过IP地址搜索用户
     *
     * @param string $ip ip地址
     * 
     * return object member
     */
    public static function searchByIp($ip) {
        
    }

    /**
     * 返回用户的统计信息
     *
     * @param int $uid 用户id
     * @return array 用户统计信息
     */
    public function getStats($uid) {
        
    }

    /**
     * 修改用户的组信息
     *
     * @param int group_id 用户组id
     * 
     * @rerurn bool
     */
    public function updateGroup($group_id) {
        
    }

    /**
     * 清空用户的组信息
     *
     * @param int $uid 用户id
     * @rerurn array group
     */
    public function cleanGroups($uid) {
        
    }

    /**
     * 得到用户的组信息
     * 
     * @param int $uid 用户id
     * @rerurn bool
     */
    public function getGroups($uid) {
        
    }

    /**
     * 锁定用户
     * 
     * @param int $uid 用户id
     * @rerurn bool
     */
    public function lock($uid) {
        
    }

    /**
     * 解锁用户
     * 
     * @param int $uid 用户id
     * @rerurn bool
     */
    public function unlock($uid) {
        
    }

    /**
     * 设置用户密码
     * 
     * @param int $uid 用户id
     * @param string password 用户密码
     * @rerurn bool
     */
    public function setWsPasswd($uid, $password) {
        
    }

    /**
     * 登出
     *
     * @since 1.5.0
     */
    public function logout($uid) {

    }

}
