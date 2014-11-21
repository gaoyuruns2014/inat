<form class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>添加商品</legend>
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>基本信息</b></div><hr>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">商品名称：</label>  
                    <div class="col-md-5">
                        <input id="name" name="name" placeholder="" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="ean13">ean13条码：</label>  
                    <div class="col-md-4">
                        <input id="ean13" name="ean13" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="upc">upc条码：</label>  
                    <div class="col-md-4">
                        <input id="upc" name="upc" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="category">类目：</label>
                    <div class="col-md-4">
                        <select id="category" name="category" class="form-control">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="category_default_id">缺省类别：</label>
                    <div class="col-md-4">
                        <select id="category_default_id" name="category_default_id" class="form-control">
                            <option value="1">衣服</option>
                            <option value="2">男装</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="manufacturer_id">制造商：</label>
                    <div class="col-md-4">
                        <select id="manufacturer_id" name="manufacturer_id" class="form-control">
                            <option value="1">七匹狼</option>
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="supplier_id">制造商：</label>
                    <div class="col-md-4">
                        <select id="supplier_id" name="supplier_id" class="form-control">
                            <option value="1">兰亭集市</option>
                        </select>
                    </div>
                </div>

                <!-- Multiple Radios (inline) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="active">显示状态：</label>
                    <div class="col-md-4"> 
                        <label class="radio-inline" for="active-0">
                            <input name="active" id="active-0" value="1" checked="checked" type="radio">
                            是
                        </label> 
                        <label class="radio-inline" for="active-1">
                            <input name="active" id="active-1" value="2" type="radio">
                            否
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Select Basic -->
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>配送信息</b></div><hr>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">物流公司：</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="selectbasic" class="form-control">
                            <option value="1">Option one</option>
                            <option value="2">Option two</option>
                        </select>
                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="width">宽：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">厘米</span>
                            <input id="width" name="width" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="height">高：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">厘米</span>
                            <input id="height" name="height" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="depth">深：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">厘米</span>
                            <input id="depth" name="depth" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="weight">重量：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">克</span>
                            <input id="weight" name="weight" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>详细信息</b></div><hr>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description_short">摘要描述：</label>  
                    <div class="col-md-5">
                        <input id="description_short" name="description_short" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="description">详细信息:</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tag">标签：</label>  
                    <div class="col-md-5">
                        <input id="tag" name="tag" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>媒体信息</b></div><hr>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="image">图片：</label>  
                    <div class="col-md-4">
                        <input id="image" name="image" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>
            </div>
        </div>
        <!-- Text input-->
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>价格信息</b></div><hr>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="price">价格：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">¥</span>
                            <input id="price" name="price" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="wholesale_price">批发价：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">¥</span>
                            <input id="wholesale_price" name="wholesale_price" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="value">成本：</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">¥</span>
                            <input id="value" name="value" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-title">
            <div class="panel-body">
                <div class="panel-heading"><b>SEO优化</b></div><hr>
                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="meta_title">meta标题：</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">20</span>
                            <input id="meta_title" name="meta_title" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="meta_description">meta描述:</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">160</span>
                            <input id="meta_description" name="meta_description" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>

                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="meta_keyword">meta关键词:</label>
                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon">70</span>
                            <input id="meta_keyword" name="meta_keyword" class="form-control" placeholder="" type="text">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for=""></label>
            <div class="col-md-4">
                <a href="index.php?r=goods"><button id="" name="" class="btn btn-primary" >添加商品</button></a>
            </div>
        </div>
    </fieldset>
</form>
