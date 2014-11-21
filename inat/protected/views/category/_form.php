

<!-- BEGIN CONTENT -->

<!-- BEGIN PAGE HEADER-->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="index.html">首页</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">商品</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <a href="#">类别管理</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <b>添加类别</b>
        </li>                
    </ul>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <form class="form-horizontal">
            <fieldset>

                <!-- Form Name -->
                <legend>添加商品类目</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">类目名称：</label>  
                    <div class="col-md-5">
                        <input id="name" name="name" placeholder="20字符以内" class="form-control input-md" required="" type="text">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="parent">所属父类：</label>
                    <div class="col-md-4">
                        <select id="parent" name="parent" class="form-control">
                            <option value="1">服装</option>
                            <option value="2">首饰</option>
                        </select>
                    </div>
                </div>

                <!-- Multiple Radios -->

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="desc">类目描述：</label>
                    <div class="col-md-4">                     
                        <textarea class="form-control" id="desc" name="desc"></textarea>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="tag">标签：</label>  
                    <div class="col-md-5">
                        <input id="tag" name="tag" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="metaTitle">mata标题：</label>  
                    <div class="col-md-5">
                        <input id="metaTitle" name="metaTitle" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">meta描述：</label>  
                    <div class="col-md-6">
                        <input id="textinput" name="textinput" placeholder="" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="metakeyword">meta关键词</label>  
                    <div class="col-md-4">
                        <input id="metakeyword" name="metakeyword" placeholder="逗号分隔" class="form-control input-md" type="text">

                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div class="col-md-4">
                        <a href="index.php?r=category"><button id="" name="" class="btn btn-primary" >添加类目</button></a>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>
<!-- END PAGE CONTENT-->


