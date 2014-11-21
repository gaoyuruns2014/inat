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
            <a href="#">供应商</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <b>供应商管理</b>
        </li>                
    </ul>
</div>
<div class="row">
    <div class="panel panel-info">

        <div class="panel-body" align="right">
            <a href="index.php?r=supplier/create"><button type="button" class="btn btn-primary">添加供应商</button></a>
        </div>    
    </div>
</div>

<table width="100%" class="table table-striped table-hover table-bordered datatable" id="example" cellspacing="0">
    <thead>
        <tr>
            <th>名称</th>
            <th>联系人</th>
            <th>手机</th>
            <th>邮编</th>
            <th>位置</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>七匹狼</td>
            <td>黎筠</td>
            <td>13910938321</td>
            <td>100101</td>
            <td>中国.北京</th>
            <td><span class="label label-success">活跃</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>兰亭集市</td>
            <td>杨枚</td>
            <td>13910932321</td>
            <td>100101</td>
            <td>中国.北京</th>
            <td><span class="label label-danger">失效</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript" language="javascript" class="init">
<script>

    $(document).ready(function () {
        $('#example').DataTable();
    });
//    $(document).ready(function () {
//        $('#example').dataTable({
//            "bStateSave": true,
//            "bServerSide": false, //服务端处理分页
//            "bPaginate": true, //是否分页
//            "bFilter": true, //是否使用内置的过滤功能
//            "bLengthChange": true, //是否允许自定义每页显示条数.
//            "aLengthMenu": [[4, 10, 20, -1], [4, 10, 20, "所有"]],
//            "iDisplayLength": 4,
//            "sPaginationType": "bootstrap" //分页样式   full_numbers
//
//        });
//    });
</script>


