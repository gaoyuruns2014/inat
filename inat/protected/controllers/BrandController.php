<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class BrandController extends Controller {

    public function actionShow() {
        $model = new Brand;

        //通过model的find方法来显示所有品牌信息
        $info = $model->find();
        var_dump($info);
        echo '*************************<br/>';
        //利用findAll() 来获得所有信息
        $info1 = $model->findAll();
        var_dump($info1);
        echo '<br>';

        //遍历数据信息
        foreach ($info1 as $k => $v) {
            echo $v->logo . '<br>';
        }

        //把变量传递到模板中，并按照模板样式进行
        //renderPartial 进行页面的渲染
        // rendPartial('模板名称', array('名称' => '值(传入的变量)');
        return $this->render('show', array('v_info1' => $info1));
    }

}
