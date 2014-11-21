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
            <a href="#">商品</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <b>商品管理</b>
        </li>                
    </ul>
</div>
<div class="row">
    <div class="panel panel-info">

        <div class="panel-body" align="right">
            <a href="index.php?r=goods/create"><button type="button" class="btn btn-primary">添加商品</button></a>
        </div>    
    </div>
</div>

<table width="100%" class="table table-striped table-hover table-bordered datatable" id="example" cellspacing="0">
    <thead>
        <tr>
            <th>编号</th>
            <th>图片</th>
            <th>名称</th>
            <th>类目</th>
            <th>基本价格</th>
            <th>售价</th>
            <th>库存量</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>100290098</td>
            <td>黎筠</td>
            <td>张硕大师特质紫砂壶</td>
            <td>工艺品--紫砂</td>
            <td>264元</td>
            <td>320</td>
            <td>12</td>
            <td><span class="label label-success">活跃</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>100290098</td>
            <td>黎筠</td>
            <td>张硕大师特质紫砂壶</td>
            <td>工艺品--紫砂</td>
            <td>264元</td>
            <td>320</td>
            <td>12</td>
            <td><span class="label label-success">活跃</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>1003232398</td>
            <td>测试</td>
            <td>景德镇新品陶瓷</td>
            <td>工艺品>>陶瓷</td>
            <td>645元</td>
            <td>1,344</td>
            <td>2</td>
            <td><span class="label label-danger">失效</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>200232098</td>
            <td></td>
            <td>紫檀珠串(精品)</td>
            <td>配饰>>珠串</td>
            <td>22元</td>
            <td>65</td>
            <td>239</td>
            <td><span class="label label-success">活跃</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>100290098</td>
            <td>黎筠</td>
            <td>蒙古马头琴制品</td>
            <td>工艺品>>乐器</td>
            <td>1,264元</td>
            <td>2,345</td>
            <td>14</td>
            <td><span class="label label-danger">失效</span></td>
            <td>
                <button type="button" class="btn btn-success btn-xs">编辑</button>
                <button type="button" class="btn btn-warning btn-xs">删除</button>
            </td>
        </tr>
        <tr>
            <td>300290098</td>
            <td></td>
            <td>福建马师傅特制古琴</td>
            <td>工艺品--古琴</td>
            <td>12,362元</td>
            <td>26,000 </td>
            <td>15</td>
            <td><span class="label label-success">活跃</span></td>
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


