<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="block box">

    <div class="block clearfix">
        <div class="AreaL">
            <h3><span>商品分类</span></h3> 
            <div id="category_tree" class="box_1">
                <dl>
                    <dt><a href="#">CDMA手机</a></dt>
                    <dd>       </dd>
                </dl>
                <dl>
                    <dt><a href="#">GSM手机</a></dt>
                    <dd>       </dd>
                </dl>
                <dl>
                    <dt><a href="#">3G手机</a></dt>
                    <dd>       </dd>
                </dl>
                <dl>
                    <dt><a href="#">双模手机</a></dt>
                    <dd>       </dd>
                </dl>

            </div>
            <div class="blank"></div><div style="display: block;" class="box" id="history_div">
                <h3><span>浏览历史</span></h3>
                <div class="box_1">

                    <div class="boxCenterList clearfix" id="history_list">
                        <ul class="clearfix">
                            <li class="goodsimg">
                                <a href="#" target="_blank">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" title="飞利浦9@9v">飞利浦9@9v</a><br />
                                本店售价：<font class="f1">￥399元</font><br />
                            </li>
                        </ul>
                        <ul class="clearfix">
                            <li class="goodsimg">
                                <a href="#" target="_blank">
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" title="诺基亚E66">诺基亚E66</a><br />
                                本店售价：<font class="f1">￥2298元</font><br />
                            </li>
                        </ul>
                        <ul id="clear_history">
                            <a onclick="clear_history()">[清空]</a>
                        </ul>  
                    </div>
                </div>
            </div>
            <div class="blank5"></div>

        </div>


        <div class="AreaR">

            <div class="box">
                <div class="box_1">
                    <h3><span>商品筛选</span></h3>
                    <div class="screeBox">
                        <strong>品牌：</strong>
                        <span>全部</span>
                        <a href="#">诺基亚</a>&nbsp;
                        <a href="#">摩托罗拉</a>&nbsp;
                        <a href="#">多普达</a>&nbsp;
                        <a href="#">飞利浦</a>&nbsp;
                        <a href="#">夏新</a>&nbsp;
                        <a href="#">三星</a>&nbsp;
                        <a href="#">索爱</a>&nbsp;
                        <a href="#">联想</a>&nbsp;
                        <a href="#">金立</a>&nbsp;
                    </div>
                    <div class="screeBox">
                        <strong>价格：</strong>
                        <span>全部</span>
                        <a href="#">200&nbsp;-&nbsp;1700</a>&nbsp;
                        <a href="#">1700&nbsp;-&nbsp;3200</a>&nbsp;
                        <a href="#">4700&nbsp;-&nbsp;6200</a>&nbsp;
                    </div>
                    <div class="screeBox">
                        <strong>颜色 :</strong>
                        <span>全部</span>
                        <a href="#">灰色</a>&nbsp;
                        <a href="#">白色</a>&nbsp;
                        <a href="#">金色</a>&nbsp;
                        <a href="#">黑色</a>&nbsp;
                    </div>
                    <div class="screeBox">
                        <strong>屏幕大小 :</strong>
                        <span>全部</span>
                        <a href="#">1.75英寸</a>&nbsp;
                        <a href="#">2.0英寸</a>&nbsp;
                        <a href="#">2.2英寸</a>&nbsp;
                        <a href="#">2.6英寸</a>&nbsp;
                        <a href="#">2.8英寸</a>&nbsp;
                    </div>
                    <div class="screeBox">
                        <strong>手机制式 :</strong>
                        <span>全部</span>
                        <a href="#">CDMA</a>&nbsp;
                        <a href="#">GSM,850,900,1800,1900</a>&nbsp;
                        <a href="#">GSM,900,1800,1900,2100</a>&nbsp;
                    </div>
                    <div class="screeBox">
                        <strong>外观样式 :</strong>
                        <span>全部</span>
                        <a href="#">滑盖</a>&nbsp;
                        <a href="#">直板</a>&nbsp;
                    </div>
                </div>
            </div>
            <div class="blank"></div>


            <div class="itemTit" id="itemBest">

                <div class="tit">精品推荐</div>
            </div>
            <div id="show_best_area" class="clearfix">
                <div class="goodsItem">

                    <a href="#"><img src="9_thumb_G_1241511871555.jpg" alt="诺基亚E66" class="goodsimg"></a><br />
                    <p class="f1"><a href="#" title="诺基亚E66">诺基亚E66</a></p>


                    <font class="market">￥2758元</font><br />

                    <font class="f1">
                    ￥2298元                     </font>
                </div>
                <div class="goodsItem">

                    <a href="#"><img src="8_thumb_G_1241425513488.jpg" alt="飞利浦9@9v" class="goodsimg"></a><br />
                    <p class="f1"><a href="#" title="飞利浦9@9v">飞利浦9@9v</a></p>


                    <font class="market">￥479元</font><br />

                    <font class="f1">
                    ￥399元                     </font>
                </div>
                <div class="goodsItem">

                    <a href="#"><img src="17_thumb_G_1241969394587.jpg" alt="夏新N7" class="goodsimg"></a><br />
                    <p class="f1"><a href="#" title="夏新N7">夏新N7</a></p>


                    <font class="market">￥2760元</font><br />

                    <font class="f1">
                    ￥2300元                     </font>
                </div>

            </div>
            <div class="blank"></div>
            <div class="box">
                <div class="box_1">
                    <h3>
                        <span>商品列表</span>
                        <form method="GET" class="sort" name="listform">
                            显示方式：
                            <a href="#"><img src="display_mode_list.gif" alt=""></a>
                            <a href="#"><img src="display_mode_grid_act.gif" alt=""></a>
                            <a href="#"><img src="display_mode_text.gif" alt=""></a>&nbsp;&nbsp;

                            <a href="#"><img src="goods_id_DESC.gif" alt="按上架时间排序"></a>
                            <a href="#"><img src="shop_price_default.gif" alt="按价格排序"></a>
                            <a href="#"><img src="last_update_default.gif" alt="按更新时间排序"></a>
                            <input name="category" value="3" type="hidden" />
                            <input name="display" value="grid" id="display" type="hidden" />
                            <input name="brand" value="0" type="hidden" />
                            <input name="price_min" value="0" type="hidden" />
                            <input name="price_max" value="0" type="hidden" />
                            <input name="filter_attr" value="0" type="hidden" />
                            <input name="page" value="1" type="hidden" />
                            <input name="sort" value="goods_id" type="hidden" />
                            <input name="order" value="DESC" type="hidden" />
                        </form>
                    </h3>
                    <form name="compareForm" action="compare.php" method="post" onsubmit="return compareGoods(this);">
                        <div class="clearfix goodsBox" style="border: medium none; padding: 11px 0pt 10px 5px;">
                            <?php foreach ($v_info1 as $v){ ?>
                            <div class="goodsItem">
                                <a href="#"><img src="32_thumb_G_1242110760196.jpg" alt="诺基亚N85" class="goodsimg"></a><br />
                                <p><a href="#" title="诺基亚N85"><?php echo $v->name?></a></p>
                                <font class="market_s"><?php echo $v->logo ?></font><br />
                                <font class="shop_s"><?php echo $v->description?></font><br />
                            </div>
                            <?php } ?>
                        </div>
                    </form>

                </div>
            </div>
            <div class="blank5"></div>
            <form name="selectPageForm" action="/category.php" method="get">
                <div id="pager" class="pagebar">
                    <span class="f_l " style="margin-right: 10px;">总计 <b>12</b>  个记录</span>
                    <span class="page_now">1</span>
                    <a href="#">[2]</a>

                    <a class="next" href="#">下一页</a>    </div>
            </form>
        </div>  

    </div>

</div>
