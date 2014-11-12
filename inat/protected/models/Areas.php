<?php

/**
 * This is the model class for table "areas".
 *
 * The followings are the available columns in table 'areas':
 * @property string $area_id
 * @property string $parent_id
 * @property string $area_name
 * @property integer $sort
 */
class Areas extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'areas';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('parent_id, area_name', 'required'),
            array('sort', 'numerical', 'integerOnly' => true),
            array('parent_id', 'length', 'max' => 10),
            array('area_name', 'length', 'max' => 50),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('area_id, parent_id, area_name, sort', 'safe', 'on' => 'search'),
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
            'area_id' => 'Area',
            'parent_id' => '上一级的id值',
            'area_name' => '地区名称',
            'sort' => '排序',
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

        $criteria->compare('area_id', $this->area_id, true);
        $criteria->compare('parent_id', $this->parent_id, true);
        $criteria->compare('area_name', $this->area_name, true);
        $criteria->compare('sort', $this->sort);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Areas the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 取得子地区列表
     *
     * @param int $parent_id 大于等于0表示取某个地区的下级地区，小于0表示取所有地区
     * @return array
     */
    function getChild($parent_id = -1) {
        
    }

    /*
     * 判断名称是否唯一
     */

    function unique($region_name, $parent_id, $id = 0) {
        
    }

    /**
     * 取得某地区的所有子孙地区id
     */
    function getDescendant($id) {
        
    }

    /**
     * 取得某地区的所有父级地区
     *
     * @param  int $id
     * @return array
     * */
    function getParents($id) {
        
    }

}
