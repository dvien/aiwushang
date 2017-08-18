<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.header')
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
<div id="wrapper">
    <!--左侧导航开始-->
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="nav-close"><i class="fa fa-times-circle"></i>
        </div>
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        @if (Session::has('pic'))
                                        <img src="{{Session::get('pic')}}" style="border-radius:40px" width="80px" height="80px">
                                        @else
                                        <img src="{{asset('admin/img/a6.jpg')}}" style="border-radius:40px" width="80px" height="80px">
                                        @endif
                                    </span>
                                </span>
                        </a>
                    </div>
                    <div class="logo-element">网站后台
                    </div>
                </li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">分类</span>
                </li>
                <li>
                    <a class="J_menuItem" href="{{url('index/index')}}">
                        <i class="fa fa-home"></i>
                        <span class="nav-label">首页</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span class="nav-label">管理员管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('user/index')}}">修改管理员密码</a>
                        </li>
                        <li>
                            <a class="J_menuItem" href="{{url('user/editInfo')}}">修改管理员信息</a>
                        </li>
                    </ul>
                </li>
                 <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span class="nav-label">会员管理</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a class="J_menuItem" href="{{url('member/index')}}">会员列表</a>
                        </li>
                        
                    </ul>
                </li>
                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">分类</span>
                </li>

                    <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">首页配置</span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="{{url('banner/index')}}">轮播图列表</a>
                        </li>
                         <li><a class="J_menuItem" href="{{url('banner/noticeindex')}}">系统公告</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('banner/briefindex')}}">网站简介列表</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('banner/novvveindex')}}">新手必看</a>
                        </li>
                         
                    </ul>
                </li>

                <li>
                    <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">信箱 </span><span class="label label-warning pull-right">0</span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="mailbox.html">收件箱</a>
                        </li>
                        <li><a class="J_menuItem" href="mail_detail.html">查看邮件</a>
                        </li>
                        <li><a class="J_menuItem" href="mail_compose.html">写信</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="form_basic.html">基本表单</a>
                        </li>
                        <li><a class="J_menuItem" href="form_validate.html">表单验证</a>
                        </li>
                        <li><a class="J_menuItem" href="form_advanced.html">高级插件</a>
                        </li>
                        <li><a class="J_menuItem" href="form_wizard.html">表单向导</a>
                        </li>
                        <li>
                            <a href="#">文件上传 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="form_webuploader.html">百度WebUploader</a>
                                </li>
                                <li><a class="J_menuItem" href="form_file_upload.html">DropzoneJS</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">编辑器 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="form_editors.html">富文本编辑器</a>
                                </li>
                                <li><a class="J_menuItem" href="form_simditor.html">simditor</a>
                                </li>
                                <li><a class="J_menuItem" href="form_markdown.html">MarkDown编辑器</a>
                                </li>
                                <li><a class="J_menuItem" href="code_editor.html">代码编辑器</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="layerdate.html">日期选择器layerDate</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="contacts.html">联系人</a>
                        </li>
                        <li><a class="J_menuItem" href="profile.html">个人资料</a>
                        </li>
                        <li>
                            <a href="#">项目管理 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="projects.html">项目</a>
                                </li>
                                <li><a class="J_menuItem" href="project_detail.html">项目详情</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="teams_board.html">团队管理</a>
                        </li>
                        <li><a class="J_menuItem" href="social_feed.html">信息流</a>
                        </li>
                        <li><a class="J_menuItem" href="clients.html">客户管理</a>
                        </li>
                        <li><a class="J_menuItem" href="file_manager.html">文件管理器</a>
                        </li>
                        <li><a class="J_menuItem" href="calendar.html">日历</a>
                        </li>
                        <li>
                            <a href="#">博客 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="blog.html">文章列表</a>
                                </li>
                                <li><a class="J_menuItem" href="article.html">文章详情</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="#">时间轴 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="timeline.html">时间轴</a>
                                </li>
                                <li><a class="J_menuItem" href="timeline_v2.html">时间轴v2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="pin_board.html">标签墙</a>
                        </li>
                        <li>
                            <a href="#">单据 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="invoice.html">单据</a>
                                </li>
                                <li><a class="J_menuItem" href="invoice_print.html">单据打印</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="search_results.html">搜索结果</a>
                        </li>
                        <li><a class="J_menuItem" href="forum_main.html">论坛</a>
                        </li>
                        <li>
                            <a href="#">即时通讯 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a class="J_menuItem" href="chat_view.html">聊天窗口</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">登录注册相关 <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li><a href="login.html" target="_blank">登录页面</a>
                                </li>
                                <li><a href="login_v2.html" target="_blank">登录页面v2</a>
                                </li>
                                <li><a href="register.html" target="_blank">注册页面</a>
                                </li>
                                <li><a href="lockscreen.html" target="_blank">登录超时</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="J_menuItem" href="404.html">404页面</a>
                        </li>
                        <li><a class="J_menuItem" href="500.html">500页面</a>
                        </li>
                        <li><a class="J_menuItem" href="empty_page.html">空白页</a>
                        </li>
                    </ul>
                </li>
                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">分类</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">商品分类管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="{{url('goodsClass/index')}}">添加商品分类</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('goodsClass/list')}}">商品分类列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="{{url('goods/index')}}">添加商品</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('goods/goodsList')}}">商城商品列表</a>
                        </li>
                        <li><a class="J_menuItem" href="{{url('goods/goodsAreaList')}}">专区商品列表</a>
                        </li>
                        <li><a class="J_menuItem" href="table_foo_table.html">Foo Tables</a>
                        </li>
                        <li><a class="J_menuItem" href="table_bootstrap.html">Bootstrap Table
                                <span class="label label-danger pull-right">推荐</span></a>
                        </li>
                    </ul>
                </li>
                <li class="line dk"></li>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                    <span class="ng-scope">分类</span>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">相册</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="basic_gallery.html">基本图库</a>
                        </li>
                        <li><a class="J_menuItem" href="carousel.html">图片切换</a>
                        </li>
                        <li><a class="J_menuItem" href="blueimp.html">Blueimp相册</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="J_menuItem" href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a class="J_menuItem" href="form_builder.html">表单构建器</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
    <!--左侧导航结束-->
    <!--右侧部分开始-->
    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="javascript:;"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a href="{{url('login/layout')}}">
                            <i class="fa fa-power-off">退出</i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row J_mainContent" id="content-main">
            <iframe id="J_iframe" width="100%" height="100%" src="{{url('index/index')}}" frameborder="0" data-id="{{url('index/header')}}" seamless></iframe>
        </div>
    </div>
    <!--右侧部分结束-->
</div>

<!-- 全局js -->
@include('admin.layouts.fooler');

<!-- 自定义js -->
<script src="{{asset('admin/js/hAdmin.js?v=4.1.0')}}"></script>
<script type="text/javascript" src="{{asset('admin/js/index.js')}}"></script>
<!-- 第三方插件 -->
<script src="{{asset('admin/js/plugins/pace/pace.min.js')}}"></script>
</body>
</html>
