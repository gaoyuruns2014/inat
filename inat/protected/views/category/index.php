





<link rel="stylesheet" href="./assets/extension/treegrid/css/jquery.treegrid.css">

<script type="text/javascript" src="./assets/extension/treegrid/js/jquery.treegrid.js"></script>
<script type="text/javascript" src="./assets/extension/treegrid/js/jquery.treegrid.bootstrap3.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.tree').treegrid({
            //expanderExpandedClass: 'glyphicon glyphicon-minus',
            //expanderCollapsedClass: 'glyphicon glyphicon-plus'
        });
    });
</script>

<!--start 类目操作区-->
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
            <b>类别管理</b>
        </li>                
    </ul>
</div>
<div class="row">
    <div class="panel panel-info">

        <div class="panel-body" align="right">
            <a href="index.php?r=category/create"><button type="button" class="btn btn-primary">添加类目</button></a>
        </div>    
    </div>
</div>
<!--end 类目操作区-->
<!--start category list-->
<div class="row">
    <table class="tree table table-hover table-bordered table-condensed table-striped">
        <thead>
            <tr>
                <th>名称</th>
                <th>描述</th>
                <th>操作</th>
            </tr>
        </thead>
        <tr class="treegrid-1">
            <td>服装</td>
            <td>服装类别</td>
            <td>服装类别</td>
            <td><a href="#">编辑</a></td>
        </tr>
        <tr class="treegrid-2 treegrid-parent-1">
            <td>女装</td>
            <td>Additional info</td>
            <td></td>
            <td><a href="#">编辑</a></td>
        </tr>
        <tr class="treegrid-3 treegrid-parent-1">
            <td>裙子</td>
            <td>Additional info</td>
            <td></td>
            <td><a href="#">编辑</a></td>
        </tr>
        <tr class="treegrid-4 treegrid-parent-3">
            <td>短裙</td>
            <td>Additional info</td>
            <td></td>
            <td><a href="#">编辑</a></td>
        </tr>
    </table>
</div>
<!--end category list-->
