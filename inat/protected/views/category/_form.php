

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        Widget settings form goes here
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn blue">Save changes</button>
                        <button type="button" class="btn default" data-dismiss="modal">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
            添加类别 <small>商品类别扩展</small>
        </h3>
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
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                        Actions <i class="fa fa-angle-down"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal form-row-seperated" action="#">
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="actions btn-set">
                                <button type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i> 返回</button>
                                <button class="btn default"><i class="fa fa-reply"></i> 重置</button>
                                <button class="btn green"><i class="fa fa-check"></i> 保存</button>
                                <button class="btn green"><i class="fa fa-check-circle"></i> 保存并继续</button>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="tabbable">
                                <div class="tab-content no-space">
                                    <div class="tab-pane active" id="tab_general">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">类别名称: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" size="30" name="category_name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">父类: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <div class="form-control height-auto">
                                                        <div class="scroller" style="height:275px;" data-always-visible="1">
                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">Mens</label>
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Footwear</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Clothing</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Accessories</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Fashion Outlet</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">Football Shirts</label>
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Premier League</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Football League</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Serie A</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Bundesliga</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <label><input type="checkbox" name="product[categories][]" value="1">Brands</label>
                                                                    <ul class="list-unstyled">
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Adidas</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Nike</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Airwalk</label>
                                                                        </li>
                                                                        <li>
                                                                            <label><input type="checkbox" name="product[categories][]" value="1">Kangol</label>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">描述: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" name="product[description]"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">图片: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" size="30" name="image_url" placeholder="">
                                                </div>
                                            </div>                                           
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Meta标题: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" size="30" name="meta_title" placeholder="">
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Meta描述: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" size="30" name="meta_desc" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Meta关键词: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" size="30" name="meta_keyword" placeholder="">
                                                </div>
                                            </div>  
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">是否显示: <span class="required">
                                                        * </span>
                                                </label>
                                                <div class="col-md-10">
                                                    <div class="radio-list">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optionsRadios" id="active1" value="option1" checked> 是 </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="optionsRadios" id="active0" value="option2" checked> 否 </label>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-title">
                            <div class="actions btn-set">
                                <button type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i> 返回</button>
                                <button class="btn default"><i class="fa fa-reply"></i> 重置</button>
                                <button class="btn green"><i class="fa fa-check"></i> 保存</button>
                                <button class="btn green"><i class="fa fa-check-circle"></i> 保存并继续</button>
                            </div>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
</div>
<!-- END CONTENT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="./assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="./assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="./assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="./assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="./assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="./assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="./assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="./assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="./assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="./assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="./assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="./assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="./assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="./assets/global/scripts/datatable.js"></script>
<script src="./assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        EcommerceProductsEdit.init();
    });
</script>
<!-- END JAVASCRIPTS -->
