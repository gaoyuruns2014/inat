<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property string $id
 * @property string $name
 * @property string $parent_id
 * @property string $code
 * @property integer $depath
 * @property integer $sort
 * @property integer $visibility
 * @property string $model_id
 * @property string $keywords
 * @property string $descript
 * @property string $title
 * @property integer $active
 * @property integer $created
 * @property integer $updated
 */
class Category extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'category';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
// NOTE: you should only define rules for those attributes that
// will receive user inputs.
        return array(
            array('name, parent_id, depath, model_id, created, updated', 'required'),
            array('depath, sort, visibility, active, created, updated', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 50),
            array('parent_id, model_id', 'length', 'max' => 11),
            array('code', 'length', 'max' => 20),
            array('keywords, descript, title', 'length', 'max' => 255),
            // The following rule is used by search().
// @todo Please remove those attributes that should not be searched.
            array('id, name, parent_id, code, depath, sort, visibility, model_id, keywords, descript, title, active, created, updated', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
// NOTE: you may need to adjust the relation name and the related
// class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => '分类ID',
            'name' => '分类名称',
            'parent_id' => '父分类ID',
            'code' => 'Code',
            'depath' => 'Depath',
            'sort' => '排序',
            'visibility' => '首页是否显示 1显示 0 不显示',
            'model_id' => '默认模型ID',
            'keywords' => 'SEO 关键词',
            'descript' => 'SEO 描述',
            'title' => 'SEO 标题 title',
            'active' => '激活开关',
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
    public function search() {
// @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('parent_id', $this->parent_id, true);
        $criteria->compare('code', $this->code, true);
        $criteria->compare('depath', $this->depath);
        $criteria->compare('sort', $this->sort);
        $criteria->compare('visibility', $this->visibility);
        $criteria->compare('model_id', $this->model_id, true);
        $criteria->compare('keywords', $this->keywords, true);
        $criteria->compare('descript', $this->descript, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('created', $this->created);
        $criteria->compare('updated', $this->updated);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Category the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 添加商品分类
     * 通过对象入口参数来添加商品分类
     * @param  CActiveRecord  $category 商品分类对象
     * @return int   $category_id     添加商品分类ID 如果为0则添加失败
     */
    public static function add($category) {
        return $category;
    }

    /**
     * 添加商品分类
     * 通过对象入口商品名称等
     * @param  string  $name 分类名称
     * @param  int  $parent_id 分类别id
     * @param  string  $code 分类编码
     * @param  int  $visibility 是否可见
     * @param  string  $keyword SEO关键词
     * @param  string  $descript SEO描述
     * @param  string  $title SEO关键词
     * @param  int   $active     激活状态
     * @return int  $category_id     添加商品分类ID 如果为0则添加失败
     */
    public static function addByInfo($name, $parent_id, $code = '', $visibility = 1, $keyword = '', $descript = '', $title = '', $active = 1) {
        return $category;
    }

  

    /**
     * 修改产品分类
     *
     * @param   $id 类目编号
     * @param   ActiveRecord $cat  待修改的类目对象     
     * @return  
     */
    public function updateById($id, $cat) {
        
    }

    /**
     * 修改产品分类
     *
     * @param   int $id 待修改类目编号
     * @param   int $parentId 父亲id
     * @param   string $name 名称
     * @param   string $code 编码
     * @param   int $active 激活状态
     * @param   int $position 排序号
     * @return  
     */
    public function updateByInfo($id, $parentid, $name, $code = '', $active = 1, $position = 1) {
        
    }

    /**
     * 激活产品分类
     *
     * @param   int $id 待修改类目编号
     * @return  
     */
    public function unlock($id) {
        
    }

    /**
     * 锁定产品分类
     *
     * @param   int $id 待修改类目编号
     * @return  
     */
    public function lock($id) {
        
    }

    /**
     * 删除指定编号产品分类
     *
     * @param   $id 类目编号
     * @return  
     */
    public function deleteById($id) {
        
    }

    /**
     * 批量删除产品分类
     *
     * @param   $ids 类目编号    
     * @return  
     */
    public function deleteByIds($id) {
        
    }

    /**
     * 移动类目，包括类目下的子类
     *
     * @param   int $id  待移动的类目编号
     * @param   int $parentId 新的父亲id
     * @param   int $afterCategoryId 移动以后的父亲id
     * @return  
     */
    public function move($id, $parentId, $afterCategoryId) {
        
    }

    /**
     * 返回指定编号的类目名称
     *
     * @param   int $id  类目编号
     * @return  string $name 类目的名称
     */
    public function getNameById($id) {
        $sql = 'select name from category where id = ' . $id;
        $model = $this->findBySql($sql);
        return $model->name;
    }

    /**
     * 返回指定编号的类目名称
     *
     * @param   string $name  类目名称
     * @return  int 类目编号 如果没有匹配值，则返回0
     */
    public function getIdByName($name) {
        $sql = 'select id from category where name = ' . $name;
        $model = $this->findBySql($sql);
        if ($model) {
            return $model->id;
        } else {
            return 0;
        }
    }

    /**
     * 返回指定编号的类目对象
     *
     * @param   int $id  类目编号
     * @return  CActiveRecord
     */
    public function getInfoById($id) {
        return $this->findByPk($id);
    }

    /**
     * 得到指定编号的父亲对象
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getParentById($id) {
        
    }

    /**
     * 得到指定编号的父亲对象
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getParentIdById($id) {
        
    }

    /**
     * 得到指定编号的所有父亲对象id
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getParentsById($id) {
        
    }

    /**
     * 得到指定编号的树路径
     *
     * @param   int $id  类目编号
     * @param   int $level  树的深度
     * 
     * @return  
     */
    function getTreeById($id, $level = 0) {
        
    }

    /**
     * 得到指定类目的路径
     *
     * @param   int $id  类目编号
     * @return  
     */
    function getPath($id) {
        
    }

    /**
     * 是否是顶级节点
     *
     * @param   int $id  类目编号
     * @return bool  
     */
    function hasParent($id) {
        
    }

    /**
     * 得到指定编号的所有父亲对象ids
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getParentIdsById($id) {
        
    }

    /**
     * 得到指定编号的子对象
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getChildById($id) {
        
    }

    /**
     * 得到指定编号的子对象
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getChildIdById($id) {
        
    }

    /**
     * 得到指定编号的所有子对象(可以按照层数来提取)
     *
     * @param   int $id  类目编号
     * @param   int $level 提取的层数 0: 为所有层
     * @return  
     */
    public function getChildsById($id, $level = 0) {
        
    }

    /**
     * 得到指定编号的所有子对象id(可以按照层数来提取)
     *
     * @param   int $id  类目编号
     * @param   int $level 提取的层数 0: 为所有层
     * @return  
     */
    public function getChildIdsById($id, $level = 0) {
        
    }

    /**
     * 得到指定编号的路径
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getPathById($id) {
        
    }

    /**
     * 得到指定编号的路径ids
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getPathIdsById($id) {
        
    }

    /**
     * 得到指定编号层级
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getLevelById($id) {
        
    }

    /**
     * 得到指定编号下属的产品数
     *
     * @param   int $id  类目编号
     * @return  
     */
    public function getGoodCountById($id) {
        
    }

    /**
     * 判断指定名称的类目是否存在
     *
     * @param   int $name  类目名称
     * @return  bool  true: 存在 false:不存在
     */
    public function isExist($name) {
        $sql = 'select id from category where $name = ' . $name;
        $model = $this->findBySql($sql);

        if ($model) {
            return true;
        } else {
            return flase;
        }
    }

    /**
     * 判断指定编号类目是否是叶子节点
     *
     * @param   int $id  类目id
     * @return  bool  true: 是 false:不是
     */
    public function isLeaf($id) {
        $sql = 'select * from category where parent_id = ' . $id;
        $model = $this->findBySql($sql);
        if ($model) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * 修建面包屑路径
     *
     * @param   int $id  类目id
     * @return  bool  true: 是 false:不是
     */
    private function _buildBreadcrumb() {
        
    }

    /**
     * 修建树路径
     *
     * @param   int $id  类目id
     * @param   int $level  树的深度
     * @return  bool  true: 是 false:不是
     */
    private function _buildBranch($id, $level = 0) {
        
    }

    /**
     * 清除类目缓存
     * @return  bool  true: 是 false:不是
     */
    public function _clearCache() {
        
    }

    /**
     * 清除指定类目缓存
     * @param   int $id  类目id
     * @return 
     */
    public function _clearCacheById($id) {
        
    }

}
