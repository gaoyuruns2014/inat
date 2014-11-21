<?php /* @var $this Controller */ ?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Metronic | Admin Dashboard Template</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>-->
        <link href="./assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="./assets/global/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN PAGE STYLES -->
        <link href="./assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/admin/layout/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/extension/datatables/css/jquery.datatables.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="./assets/global/css/components.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link href="./assets/admin/layout/css/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
        <link href="./assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
    <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
    <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
    <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
    <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
    <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
    <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
    <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
    <body class="page-header-fixed page-quick-sidebar-over-content">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="./assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
                    </a>
                    <div class="menu-toggler sidebar-toggler hide">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-default">
                                    7 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 14 new notifications
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-success">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                New user registered. <span class="time">
                                                    Just now </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Server #12 overloaded. <span class="time">
                                                    15 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Server #2 not responding. <span class="time">
                                                    22 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                Application error. <span class="time">
                                                    40 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                2 user IP blocked. <span class="time">
                                                    5 hrs </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-warning">
                                                    <i class="fa fa-bell-o"></i>
                                                </span>
                                                Storage Server #4 not responding. <span class="time">
                                                    45 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-info">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                System Error. <span class="time">
                                                    55 mins </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="label label-sm label-icon label-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                Database overloaded 68%. <span class="time">
                                                    2 hrs </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all notifications <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END NOTIFICATION DROPDOWN -->
                        <!-- BEGIN INBOX DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-envelope-open"></i>
                                <span class="badge badge-default">
                                    4 </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <p>
                                        You have 12 new messages
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="./assets/admin/layout/img/avatar2.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        Just Now </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="./assets/admin/layout/img/avatar3.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        16 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="./assets/admin/layout/img/avatar1.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Bob Nilson </span>
                                                    <span class="time">
                                                        2 hrs </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="./assets/admin/layout/img/avatar2.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Lisa Wong </span>
                                                    <span class="time">
                                                        40 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed auctor 40% nibh congue nibh... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="inbox.html?a=view">
                                                <span class="photo">
                                                    <img src="./assets/admin/layout/img/avatar3.jpg" alt=""/>
                                                </span>
                                                <span class="subject">
                                                    <span class="from">
                                                        Richard Doe </span>
                                                    <span class="time">
                                                        46 mins </span>
                                                </span>
                                                <span class="message">
                                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="inbox.html">
                                        See all messages <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END INBOX DROPDOWN -->
                        <!-- BEGIN TODO DROPDOWN -->
                        <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-calendar"></i>
                                <span class="badge badge-default">
                                    3 </span>
                            </a>
                            <ul class="dropdown-menu extended tasks">
                                <li>
                                    <p>
                                        You have 12 pending tasks
                                    </p>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 250px;">
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New release v1.2 </span>
                                                    <span class="percent">
                                                        30% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            40% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Application deployment </span>
                                                    <span class="percent">
                                                        65% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            65% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile app release </span>
                                                    <span class="percent">
                                                        98% </span>
                                                </span>
                                                <span class="progress">
                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            98% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Database migration </span>
                                                    <span class="percent">
                                                        10% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            10% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Web server upgrade </span>
                                                    <span class="percent">
                                                        58% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            58% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        Mobile development </span>
                                                    <span class="percent">
                                                        85% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            85% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="task">
                                                    <span class="desc">
                                                        New UI release </span>
                                                    <span class="percent">
                                                        18% </span>
                                                </span>
                                                <span class="progress progress-striped">
                                                    <span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">
                                                            18% Complete </span>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external">
                                    <a href="#">
                                        See all tasks <i class="m-icon-swapright"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END TODO DROPDOWN -->
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle hide1" src="./assets/admin/layout/img/avatar3_small.jpg"/>
                                <span class="username username-hide-on-mobile">
                                    Bob </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="extra_profile.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <a href="page_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
                                            3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
                                            7 </span>
                                    </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="extra_lock.html">
                                        <i class="icon-lock"></i> Lock Screen </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-key"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                        <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a href="javascript:;" class="dropdown-toggle">
                                <i class="icon-logout"></i>
                            </a>
                        </li>
                        <!-- END QUICK SIDEBAR TOGGLER -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                        <li class="start active open"><br/></li>
                        <li class="start active open">
                            <a href="javascript:;">
                                <i class="icon-home"></i>
                                <span class="title">管理首页</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-basket"></i>
                                <span class="title">商品</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.php?r=goods">
                                        <i class="icon-home"></i>
                                        商品管理</a>
                                </li>
                                <li>
                                    <a href="index.php?r=category">
                                        <i class="icon-basket"></i>
                                        商品类别</a>
                                </li>
                                <li>
                                    <a href="ecommerce_orders_view.html">
                                        <i class="icon-tag"></i>
                                        商品属性</a>
                                </li>
                                <li>
                                    <a href="ecommerce_products.html">
                                        <i class="icon-handbag"></i>
                                        商品规格</a>
                                </li>
                                <li>
                                    <a href="index.php?r=manufacturer/index">
                                        <i class="icon-pencil"></i>
                                        制造商</a>
                                </li>
                                <li>
                                    <a href="index.php?r=supplier/index">
                                        <i class="icon-pencil"></i>
                                        供应商</a>
                                </li> 
                                <li>
                                    <a href="ecommerce_products_edit.html">
                                        <i class="icon-pencil"></i>
                                        品牌</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-rocket"></i>
                                <span class="title">订单</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="layout_horizontal_sidebar_menu.html">
                                        订单管理</a>
                                </li>
                                <li>
                                    <a href="index_horizontal_menu.html">
                                        发货单</a>
                                </li>
                                <li>
                                    <a href="layout_horizontal_menu1.html">
                                        发票</a>
                                </li>
                                <li>
                                    <a href="layout_horizontal_menu2.html">
                                        退货</a>
                                </li>
                                <li>
                                    <a href="layout_fontawesome_icons.html">
                                        <span class="badge badge-roundless badge-danger">new</span>物流</a>
                                </li>
                            </ul>
                        </li>
                        <!-- BEGIN FRONTEND THEME LINKS -->
                        <li>
                            <a href="javascript:;">
                                <i class="icon-star"></i>
                                <span class="title">
                                    商家 </span>
                                <span class="arrow">
                                </span>
                            </a>
                            <ul class="sub-menu">
                                <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete eCommerce Frontend Theme For Metronic Admin">
                                    <a href="http://xiujie.cn/preview/index.php?theme=metronic_frontend&page=shop-index.html" target="_blank">
                                        <span class="title">
                                            商家管理 </span>
                                    </a>
                                </li>
                                <li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete Corporate Frontend Theme For Metronic Admin">
                                    <a href="http://xiujie.cn/preview/index.php?theme=metronic_frontend" target="_blank">
                                        <span class="title">
                                            添加商家 </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-logout"></i>
                                <span class="title">促销</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="quick_sidebar_push_content.html">
                                        促销活动</a>
                                </li>
                                <li>
                                    <a href="quick_sidebar_over_content.html">
                                        限时抢购</a>
                                </li>
                                <li>
                                    <a href="quick_sidebar_over_content_transparent.html">
                                        代金券</a>
                                </li>
                            </ul>
                        </li>                        
                        <!-- END FRONTEND THEME LINKS -->
                        <li>
                            <a href="javascript:;">
                                <i class="icon-diamond"></i>
                                <span class="title">会员</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="ui_general.html">
                                        会员管理</a>
                                </li>
                                <li>
                                    <a href="ui_buttons.html">
                                        会员组</a>
                                </li>
                                <li>
                                    <a href="ui_icons.html">
                                        <span class="badge badge-roundless badge-danger">new</span>地址</a>
                                </li>
                                <li>
                                    <a href="ui_colors.html">
                                        评价</a>
                                </li>
                                <li>
                                    <a href="ui_typography.html">
                                        会员服务</a>
                                </li>
                                <li>
                                    <a href="ui_tabs_accordions_navs.html">
                                        会员建议</a>
                                </li>
                                <li>
                                    <a href="ui_tree.html">
                                        <span class="badge badge-roundless badge-danger">new</span>站内消息</a>
                                </li>
                                <li>
                                    <a href="ui_page_progress_style_1.html">
                                        <span class="badge badge-roundless badge-warning">new</span>到货通知</a>
                                </li>
                                <li>
                                    <a href="ui_blockui.html">
                                        邮件列表</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-puzzle"></i>
                                <span class="title">设置</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="components_pickers.html">
                                        物流设置</a>
                                </li>
                                <li>
                                    <a href="components_dropdowns.html">
                                        支付设置</a>
                                </li>
                                <li>
                                    <a href="components_form_tools.html">
                                        会员等级积分</a>
                                </li>
                                <li>
                                    <a href="components_editors.html">
                                        商家设置</a>
                                </li>
                                <li>
                                    <a href="components_ion_sliders.html">
                                        区域设置</a>
                                </li>
                                <li>
                                    <a href="components_noui_sliders.html">
                                        帮助信息</a>
                                </li>
                                <li>
                                    <a href="components_jqueryui_sliders.html">
                                        模板设置</a>
                                </li>
                                <li>
                                    <a href="components_knob_dials.html">
                                        标签设置</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-settings"></i>
                                <span class="title">管理员</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="form_controls.html">
                                        管理员设置</a>
                                </li>
                                <li>
                                    <a href="form_layouts.html">
                                        权限设置</a>
                                </li>
                                <li>
                                    <a href="form_editable.html">
                                        <span class="badge badge-roundless badge-warning">new</span>操作日志</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-logout"></i>
                                <span class="title">统计</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">

                                <li>
                                    <a href="quick_sidebar_push_content.html">
                                        最佳类目</a>
                                </li>
                                <li>
                                    <a href="quick_sidebar_over_content.html">
                                        商家排行</a>
                                </li>
                                <li>
                                    <a href="quick_sidebar_over_content_transparent.html">
                                        会员统计</a>
                                </li>
                                <li>
                                    <a href="quick_sidebar_on_boxed_layout.html">
                                        制作者统计</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="icon-envelope-open"></i>
                                <span class="title">系统</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="email_newsletter.html">
                                        备份还原</a>
                                </li>
                                <li>
                                    <a href="email_system.html">
                                        网站地图</a>
                                </li>
                                <li>
                                    <a href="email_system.html">
                                        帮助信息</a>
                                </li>                                
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->

            <!--PAGE CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php echo $content; ?>
                    <!--END PAGE CONTENT -->
                </div>
            </div>
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner">
                    <center>2014 Copyright  印刻艺术信息技术 京ICP2373837</center>
                </div>
                <div class="page-footer-tools">
                    <span class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </span>
                </div>
            </div>
            <!-- END FOOTER -->
            <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
            <!-- BEGIN CORE PLUGINS -->
            <!--[if lt IE 9]>
            <script src="./assets/global/plugins/respond.min.js"></script>
            <script src="./assets/global/plugins/excanvas.min.js"></script> 
            <![endif]-->
            <script src="./assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
            <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
            <script src="./assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN: Page level plugins -->
            <script src="./assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
            <script src="./assets/extension/datatables/js/jqury.datatables.js" type="text/javascript"></script>
            <script src="./assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
            <!-- BEGIN:File Upload Plugin JS files-->
            <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
            <script src="./assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
            <!-- The Templates plugin is included to render the upload/download listings -->
            <script src="./assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
            <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
            <script src="./assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
            <!-- The Canvas to Blob plugin is included for image resizing functionality -->
            <script src="./assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
            <!-- blueimp Gallery script -->
            <script src="./assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
            <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
            <!-- The basic File Upload plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
            <!-- The File Upload processing plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
            <!-- The File Upload image preview & resize plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
            <!-- The File Upload audio preview plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
            <!-- The File Upload video preview plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
            <!-- The File Upload validation plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
            <!-- The File Upload user interface plugin -->
            <script src="./assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
            <!-- The main application script -->
            <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
            <!--[if (gte IE 8)&(lt IE 10)]>
                <script src="./assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
                <![endif]-->
            <!-- END:File Upload Plugin JS files-->
            <!-- END: Page level plugins -->
            <script src="./assets/global/scripts/metronic.js" type="text/javascript"></script>
            <script src="./assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
            <script src="./assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
            <script src="./assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
            <script src="./assets/admin/pages/scripts/inbox.js" type="text/javascript"></script>
            <script src="./assets/extension/datatables/js/dataTables.bootstrap.js" type="text/javascript"></script>
        
            <script>
                jQuery(document).ready(function () {
                    // initiate layout and plugins
                    Metronic.init(); // init metronic core components
                    Layout.init(); // init current layout
                    QuickSidebar.init(); // init quick sidebar
                    Demo.init(); // init demo features
                    Inbox.init();
                });
            </script>
            <!-- END JAVASCRIPTS -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www. /analytics.js', 'ga');
                ga('create', 'UA-37564768-1', 'xiujie.cn');
                ga('send', 'pageview');
            </script>
    
        </body>

    <!-- END BODY -->
</html>
