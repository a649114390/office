<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- <?php echo (C("BOOTSTRAP_URL")); ?> 3.3.6 -->
    <link rel="stylesheet" href="<?php echo (C("BOOTSTRAP_URL")); ?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo (C("DIST_URL")); ?>/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo (C("DIST_URL")); ?>/css/skins/skin-blue.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (C("PLUGIN_URL")); ?>/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo (C("PLUGIN_URL")); ?>/sweetAlert/sweetalert.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (C("PLUGIN_URL")); ?>/select2/select2.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (C("PLUGIN_URL")); ?>/select2/select-bootstrap.css"/>
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo (C("PLUGIN_URL")); ?>/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?php echo (C("PLUGIN_URL")); ?>/sweetAlert/sweetalert.min.js"></script>
    <script src="<?php echo (C("PLUGIN_URL")); ?>/select2/select2.full.min.js"></script>
    <!--<script src="<?php echo (C("PLUGIN_URL")); ?>/select2/i18n/zh-CN.js"></script>-->
    <!-- <?php echo (C("BOOTSTRAP_URL")); ?> 3.3.6 -->
    <script src="<?php echo (C("BOOTSTRAP_URL")); ?>/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo (C("DIST_URL")); ?>/js/app.min.js"></script>
    <link href="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <!--<script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/third-party/jquery.min.js"></script>-->
    <!--umedit  start-->
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/umeditor.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/umeditor1.2.3-utf8-php/lang/zh-cn/zh-cn.js"></script>
    <!--umedit  end-->
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/datatables/extensions/Buttons/buttons.flash.js"></script>-->
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/datatables/extensions/Buttons/buttons.jszip.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("PLUGIN_URL")); ?>/datatables/extensions/Buttons/buttons.html5.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo (C("PLUGIN_URL")); ?>/datatables/extensions/Buttons/dataTables.buttons.scss">-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="<?php echo (C("DIST_URL")); ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <!-- The message -->
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                                <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks Menu -->
                    <li class="dropdown tasks-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- Inner menu: contains the tasks -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <!-- Task title and progress text -->
                                            <h3>
                                                    Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <!-- The progress bar -->
                                            <div class="progress xs">
                                                <!-- Change the css width attribute to simulate progress -->
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo (C("DIST_URL")); ?>/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo (session('teacher_name')); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo (C("DIST_URL")); ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo (session('teacher_name')); ?> - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo (C("DIST_URL")); ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo (session('teacher_name')); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->

                <li><a href="<?php echo U('Declare/index');?>"><i class="fa fa-pie-chart"></i> <span>我要申报</span></a></li>
                <li><a href="<?php echo U('Declare/info');?>"><i class="fa fa-link"></i> <span>我的申报</span></a></li>
                <li><a href="<?php echo U('Reimburse/index');?>"><i class="fa fa-user"></i> <span>我要报销</span></a></li>
                <li><a href="<?php echo U('Reimburse/info');?>"><i class="fa fa-user"></i> <span>我的报销</span></a></li>
                <li><a href="<?php echo U('Mail/index');?>"><i class="fa fa-envelope-o"></i> <span>站内信</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-link"></i> <span>用户管理</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo U('Teacher/index');?>"><i class="fa fa-building-o"></i>用户信息
                                <span class="pull-right-container">
                                    <small class="label pull-right bg-green">6</small></span></a></li>
                        <li><a href="<?php echo U('Teacher/auth');?>"><i class="fa fa-building-o"></i>权限分配</a></li>
                        <li><a href="<?php echo U('Teacher/authDepart');?>"><i class="fa fa-building-o"></i>权限与部门</a></li>
                    </ul>
                </li>


            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo ($title); ?>
                <small><?php echo ($title_small); ?></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">我要报销</h3>
        <div style="float: right">
            <a href="#" class="btn btn-default" onclick="showReimburse()"><i class="im-plus"></i> 我要报销</a>
            <a href="#" class="btn btn-default" onclick="checkAll()"><i class="im-plus"></i> 全选</a>
            <a href="#" class="btn btn-default " onclick="deleteAll()"><i class="im-plus fa fa-trash"></i> 选中删除</a>
            <button type="button" class="btn btn-default btn-lrg ajax" title="刷新" onclick="refresh()">
                <i class="fa fa-spin fa-refresh"></i>&nbsp; 刷新
            </button>
        </div>
    </div>

        <div class="box-body">

            <div class="box-body" style="display: none" id="add_reimburse">
                <form action="<?php echo U('Reimburse/index');?>?type=form" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered table-striped dataTable table-hover " >
                        <thead>
                        <tr>
                            <td>报销的项目</td><td>用途</td><td>金额</td><td>简要说明</td><td>附件</td><td>操作</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="text" class="form-control" placeholder="项目名称" name="reimburse_name" id="reimburse_name"></td>
                            <td><input type="text" class="form-control" placeholder="用途" name="reimburse_use" id="reimburse_use"></td>
                            <td width="100px">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="reimburse_money" id="reimburse_money">
                                    <span class="input-group-addon">元</span>
                                </div>
                            <td><input type="text" class="form-control" placeholder="简要说明" name="reimburse_info" id="reimburse_info"></td>
                            <td width="120px"><input type="file" id="exampleInputFile" name="file"></td>
                            <td><button type='submit' class='edit-btn fa fa-user-plus btn btn-primary'  >新建</button></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped dataTable table-hover "></table>
            </div>

        </div>

    <!-- /.box-body -->
</div>





<script type="text/javascript">

    var table;
    $(document).ready( function () {
        table = $('#table').DataTable({
            "ajax": {
                "url": "<?php echo U('Reimburse/index');?>?type=data",
                //"dataSrc": "data",//默认为data
                "type": "post",
                "error": function () {
                    swal({
                        title: "错误!",
                        text: "服务器未正常响应，请重试",
                        type: "error",
                        confirmButtonText: "知道了"
                    });
                }
            },
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "columns": [
                {
                    "data": "id",
                    "title": "选中",
                    "width": "5%",
                    "defaultContent": "", "mRender": function (data, type, full) {
                    return "<label>" +
                        "<input type='checkbox' name='box' style='height: 18px;width: 18px;' value='" + data + "' id='" + data + "'>" +
                        "</label>";
                }
                },
                {"data": "reimburse_name", "title": "报销的项目", "sClass": "text-center", "defaultContent": ""},
                {"data": "teacher_name", "title": "报销人", "sClass": "text-center", "defaultContent": ""},
                {
                    "data": "add_time", "title": "时间","width":"15%" ,"sClass": "text-center","defaultContent": "",
                    "mRender": function (data, type, full) {
                        return new Date(parseInt(data) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");
                    }
                },
                {
                    "data": 'reimburse_state',
                    "title": "进度",
                    "sClass": "text-center",
                    "defaultContent": "",
                    "mRender": function (data, type, full) {
                        var progress='';
                        if (data == 0 ){
                            data = '未评审';
                        }else if(data == -1){
                            data = '被驳回';
                        } else{
                            if (full.reimburse_money <= 20000){
                                if (data == 1){
                                    var title = '部门负责人已审核';
                                    progress=33;
                                }else if(data == 2){
                                    var title = '财务已审核';
                                    progress=66;
                                }else if(data == 3){
                                    var title = '分管领导已审核,报销通过';
                                    progress=100;
                                }
                            }else{
                                if (data == 1){
                                    var title = '部门负责人已审核';
                                }else if(data == 2){
                                    var title = '财务已审核';
                                }else if(data == 3){
                                    var title = '分管领导已审核';
                                }else if (data == 4){
                                    var title = '主管领导已审核,报销通过!'
                                }
                                progress = data * 25;
                            }

                            data ='<a href="www.baidu.com">' +
                                '<div class="progress progress-xs progress-striped active" title="'+title+'">' +
                                '<div class="progress-bar progress-bar-primary" style="width:' + (progress) + '%"></div>' +
                                '</div></a>';
                        }
                        return data;
                    }
                },
                {
                    "data": "reimburse_attachment",
                    "title": "附件",
                    "sClass": "text-center",
                    "defaultContent": "",
                    "mRender": function (data, type, full) {
                        if(data){
                            data = "有";
                        }else{
                            data = "无";
                        }
                        return data;
                    }
                },
                {
                    "data": 'reimburse_state', "title": "操作", "sClass": "text-center", "defaultContent":"",
                    "mRender": function (data, type, full) {
                        if (<?php echo (session('teacher_level')); ?>-1 <=  data){
                            data = 'disabled title="你已评审"';
                            var fail = 'disabled title="已通过,无法驳回"';
                        }else if (data == -1){
                            data ='disabled title="已被驳回"';
                            var fail = 'disabled title="不要重复驳回"';
                        }else if(full.teacher_id == <?php echo (session('teacher_id')); ?>){
                            data ='disabled title="无法审核自己的申请"';
                            var fail = 'disabled title="不可以驳回自己的申请"';
                        }else{
                            data = '';
                        }
                        return   "<div class='btn-group'>" +
                            "<button type='button' class='edit-btn fa fa-search-plus btn btn-info'  id='info'>详细</button>" +
                            <?php if(($btn_flag) == "true"): ?>"<button type='button' class='edit-btn fa fa-mail-forward btn btn-success'  id='check' style='margin-left: 5px' "+
                            " "+data+">通过</button>" +
                            "<button type='button' class='delete-btn fa fa-reply-all btn btn-danger' id='fail' style='margin-left: 5px' "+
                            ""+fail+">驳回</button>" +<?php endif; ?>
                        "</div>";
                    }

                }

            ],
            language: {
                "sProcessing": "处理中...",
                "sLengthMenu": "显示 _MENU_ 项结果",
                "sZeroRecords": "没有匹配结果",
                "sInfo": "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                "sInfoEmpty": "显示第 0 至 0 项结果，共 0 项",
                "sInfoFiltered": "(由 _MAX_ 项结果过滤)",
                "sInfoPostFix": "",
                "sSearch": "搜索:",
                "sUrl": "",
                "sEmptyTable": "表中数据为空",
                "sLoadingRecords": "载入中...",
                "sInfoThousands": ",",
                "oPaginate": {
                    "sFirst": "首页",
                    "sPrevious": "上页",
                    "sNext": "下页",
                    "sLast": "末页"
                },
                "oAria": {
                    "sSortAscending": ": 以升序排列此列",
                    "sSortDescending": ": 以降序排列此列"
                }
            }
        });

        $("#table tbody").on("click","#info",function(){

            var row=table.row($(this).parents("tr"));
            var data=row.data();
            var id = data['id'];
            window.open("<?php echo U('reimburse/timeLine');?>?id="+id);
        });

        $("#table tbody").on("click","#check",function(){

            var row=table.row($(this).parents("tr"));
            var data=row.data();
            var id = data['id'];



            $.ajax({
                url:"<?php echo U('Reimburse/index');?>?type=check",
                type:"post",
                dataType:"text",
                data:{'check_data':id}
            })
                .done(function (msg) {
                    if (msg == 0){
                        swal({
                            title: "错误!",
                            text: "服务器未正常响应，请重试",
                            type: "error",
                            confirmButtonText: "知道了"
                        });
                    }else{
                        table.ajax.reload();
                        swal("成功", '操作成功！', "success");
                    }
                })
                .fail(function () {
                    swal({
                        title: "错误!",
                        text: "服务器未正常响应,请重试",
                        type: "error",
                        confirmButtonText: "知道了"
                    });
                });

        });

        $("#table tbody").on("click","#fail",function() {

            var row = table.row($(this).parents("tr"));
            var data = row.data();
            var id = data['id'];
            var reason = '';
            swal({
                    title: "驳回",
                    text: "根据规定，您必须输入驳回理由",
                    type: "input",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    animation: "slide-from-top",
                    inputPlaceholder: "驳回理由"
                },
                function (inputValue) {
                    if (inputValue === false) return false;

                    if (inputValue === "") {
                        swal.showInputError("理由不能为空");
                        return false
                    }
                    reason = inputValue;
                    $.ajax({
                        url:"<?php echo U('Reimburse/index');?>?type=fail",
                        type:"post",
                        dataType:"text",
                        data:{'fail_data':id,'fail_reason':reason}

                    })
                        .done(function (msg) {
                            if (msg == 0){
                                swal({
                                    title: "错误!",
                                    text: "服务器未正常响应，请重试",
                                    type: "error",
                                    confirmButtonText: "知道了"
                                });
                            }else{
                                table.ajax.reload();
                                swal("成功", '操作成功！', "success");
                            }
                        })
                        .fail(function () {
                            console.log('fail');
                            swal({
                                title: "错误!",
                                text: "服务器未正常响应,请重试",
                                type: "error",
                                confirmButtonText: "知道了"
                            });
                        });
                });


        });



    });

    function showReimburse() {
        $('#add_reimburse').slideToggle('slow');
    }











</script>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
</div>
<script>
    $("ul >li >a").each(function(){
//        debugger;
        if($($(this))[0].href==String(window.location))

         if ($(this).parent().parent().attr("class") == "treeview-menu"){
//            二级加样式
             $(this).parent().addClass("active");
             $(this).parent().parent().addClass("menu-open");
             $(this).parent().parent().parent().addClass("active");
         }else{
//             一级家样式
             $(this).parent().addClass("active");
         }
    });


</script>


</body>
</html>