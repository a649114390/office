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
        <h3 class="box-title">用户信息</h3>
        <div style="float: right">
            <a href="#" class="btn btn-default" onclick="showReimburse()"><i class="im-plus"></i> 添加</a>
            <a href="#" class="btn btn-default" onclick="checkAll()"><i class="im-plus"></i> 全选</a>
            <a href="#" class="btn btn-default " onclick="deleteAll()"><i class="im-plus fa fa-trash"></i> 选中删除</a>
            <button type="button" class="btn btn-default btn-lrg ajax" title="刷新" onclick="refresh()">
                <i class="fa fa-spin fa-refresh"></i>&nbsp; 刷新
            </button>
        </div>
    </div>

    <div class="box-body">

        <div class="box-body" style="display: none" id="add_reimburse">
            <form  method="post" name="form">
                <input type="hidden" id="add_flag">
                <table class="table table-bordered table-striped dataTable table-hover " >
                    <thead>
                    <tr>
                        <td>姓名</td><td>性别</td><td>工号</td><td>职位</td><td>部门</td><td>操作</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="text" class="form-control" placeholder="姓名" name="teacher_name" id="teacher_name"></td>
                        <td width="80">
                            <select class="form-control" name="teacher_sex" id="teacher_sex">
                                <option selected="selected">男</option>
                                <option>女</option>
                            </select>
                        </td>
                        <td><input type="text" class="form-control" name="teacher_id" placeholder="工号" id="teacher_id"></td>
                        <td>
                            <select class="form-control" name="teacher_job" id="teacher_job">
                                <option selected="selected">教师</option>
                                <option>负责人</option>
                                <option>主任</option>
                                <option>副主任</option>
                                <option>领导</option>
                            </select>
                        </td>
                        <td width="280">
                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"
                                    tabindex="-1" aria-hidden="true" id="teacher_department" name="teacher_department">
                                <?php if(is_array($rule)): foreach($rule as $k=>$v): ?><option value="<?php echo ($v["id"]); ?>" ><?php echo ($v["titles"]); ?></option><?php endforeach; endif; ?>
                            </select>
                        </td>
                        <td>
                            <button type='button' class='edit-btn fa fa-user-plus btn btn-primary' id="add_teacher">新建</button>
                        </td>
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
    $(document).ready(function() {
        $("#teacher_department").select2({
            theme: "bootstrap"
        });

    });


</script>



<script type="text/javascript">

    var table;
    $(document).ready( function () {
        table = $('#table').DataTable({
            "ajax": {
                "url": "/office/index.php/Home/Teacher/index.html?type=data",
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
                {"data": "teacher_name", "title": "姓名", "sClass": "text-center", "defaultContent": ""},
                {"data": "teacher_id", "title": "教工号", "sClass": "text-center", "defaultContent": ""},
                {"data": "teacher_sex", "title": "性别", "sClass": "text-center", "defaultContent": ""},
                {"data": "teacher_job", "title": "职位", "sClass": "text-center", "defaultContent": ""},
                {"data": "department", "title": "部门", "sClass": "text-center", "defaultContent": ""},
                {
                    "data": "add_time", "title": "时间","width":"15%" ,"sClass": "text-center","defaultContent": "",
                    "mRender": function (data, type, full) {

                        return new Date(parseInt(data) * 1000).toLocaleString().replace(/年|月/g, "-").replace(/日/g, " ");
                    }
                },

                {
                    "data": '', "title": "操作", "sClass": "text-center", "defaultContent":
                "<div class='btn-group'>"+
                "<button type='button' class='edit-btn fa  fa-search-plus btn btn-info'  id='edit'>修改</button>"+
                "<button type='button' class='delete-btn fa fa-trash-o btn btn-danger' style='margin-left: 5px' id='delete' >删除</button>"+
                "</div>"


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

        $("#table tbody").on("click","#edit",function(){
            $('#add_reimburse').slideDown();
            var row=table.row($(this).parents("tr"));
            var data=row.data();
            $('#add_flag').val(data['id']);
            $('#teacher_id').val(data['teacher_id']);
            $('#teacher_name').val(data['teacher_name']);
            $('#teacher_sex').val(data['teacher_sex']);
            $('#teacher_job').val(data['teacher_job']);
            $("#teacher_department").select2({
                theme: "bootstrap"
            }).val(data['department_id']).trigger('change');
            $('#add_teacher').text('修改')
        });

        $("#table tbody").on("click",".delete-btn",function(){

            var row=table.row($(this).parents("tr"));
            var data=row.data();
            var id = data['id'];
            swal({
                    title: "确定删除吗？",
                    text: "你将无法恢复！",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "确定删除！",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: "<?php echo U('Teacher/index');?>?type=del",
                        type: 'post',
                        dataType: 'json',
                        data: {'data': id}
                    })
                        .done(function(msg) {
                            if (msg === 1) {
                                table.row( $("#"+id).parents('tr') ).remove().draw();
                                swal("成功", '删除成功！', "success");
                            }else{
                                swal({
                                    title: "错误!",
                                    text: "服务器未正常响应，请重试",
                                    type: "error",
                                    confirmButtonText: "知道了"
                                });
                            }
                        })
                        .fail(function() {
                            swal({
                                title: "错误!",
                                text: "服务器未正常响应，请重试",
                                type: "error",
                                confirmButtonText: "知道了"
                            });
                        });
                });




        });





    });

    function showReimburse() {
        $('#add_reimburse').slideToggle('slow');
        $('#add_teacher').text('新建');
        $('#add_flag').val('');
        $('#teacher_id').val('');
        $('#teacher_name').val('');
        $('#teacher_sex').val('男');
        $('#teacher_job').val('教师');
        $("#teacher_department").select2({
            theme: "bootstrap"
        }).val(data['1']).trigger('change');
    }

    $('#add_teacher').click(function () {
        var flag = $('#add_flag').val();
        $.ajax({
            url:"/office/index.php/Home/Teacher/index.html?type=edit&flag="+flag,
            type:"post",
            dataType:"json",
            data:{'id':$('#teacher_id').val(),'name':$('#teacher_name').val(),'sex':$('#teacher_sex').val(),
            'job':$('#teacher_job').val(),'depart':$("#teacher_department").val()}
        })
            .done(function (msg) {
                if (msg === 1){
                    table.ajax.reload();
                    swal("成功", '操作成功！', "success");
                }else if (msg === -1){
                    swal({
                        title: "错误!",
                        text: "你没有修改",
                        type: "error",
                        confirmButtonText: "知道了"
                    });
                }else if(msg === 0){
                    swal({
                        title: "错误!",
                        text: "请检查输入数据的格式",
                        type: "error",
                        confirmButtonText: "知道了"
                    });
                }
            })

    });

    function checkAll() {
        $("input[name='box']").attr("checked","checked");
    }


    function deleteAll() {
        var data="";
        $("input[name='box']:checkbox:checked").each(function(){
            data +=  $(this).val() + ',';
        });
        if (data == "") {
            swal({
                title: "错误!",
                text: "未选中一项！",
                type: "error",
                confirmButtonText: "知道了"
            });
        } else {
            data = data.substring(0, data.length - 1);
            swal({
                    title: "确定删除吗？",
                    text: "你将无法恢复！",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "确定删除！",
                    closeOnConfirm: false
                },
                function(){
                    $.ajax({
                        url: "/office/index.php/Home/Teacher/index.html?type=del",
                        type: 'post',
                        dataType: 'json',
                        data: {'data': data}
                    })
                        .done(function(msg) {
                            if (msg === 1) {
                                data = data.split(',');
                                for (var i=0;i<data.length;i++) {
                                    table.row( $("#"+data[i]).parents('tr') ).remove().draw();
                                }
                                swal("成功", '删除成功！', "success");
                            }else{
                                swal({
                                    title: "错误!",
                                    text: "服务器未正常响应，请重试",
                                    type: "error",
                                    confirmButtonText: "知道了"
                                });
                            }
                        })
                        .fail(function() {
                            swal({
                                title: "错误!",
                                text: "服务器未正常响应，请重试",
                                type: "error",
                                confirmButtonText: "知道了"
                            });
                        });
                });
        }


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