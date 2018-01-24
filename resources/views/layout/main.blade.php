<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
    <link rel="Shortcut Icon" href="/favicon.ico" />
    <!--[if lt IE 9] -->
    <script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/respond.min.js')}}"></script>
    <!-- [endif]-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('h-ui-3.0/static/h-ui/css/H-ui.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('h-ui-3.0/static/h-ui.admin/css/H-ui.admin.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('h-ui-3.0/lib/Hui-iconfont/1.0.8/iconfont.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('h-ui-3.0/static/h-ui.admin/skin/default/skin.css')}}" id="skin" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('h-ui-3.0/static/h-ui.admin/css/style.css')}}" />
    <!--[if IE 6] -->
    <script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>pikalu</title>
</head>
<body>

@include("layout.header")

<div class="container">
    <div class="blog-header">
    </div>
    <div class="row">
        <!-- 填充-->
        @yield("content")
                <!-- end-->
        {{--@include("layout.sidebar")--}}
    </div>
</div><!-- /.row -->
</div><!-- /.container -->

@include("layout.footer")

        <!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/layer/2.4/layer.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/static/h-ui/js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/static/h-ui.admin/js/H-ui.admin.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/jquery.validation/1.14.0/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/jquery.validation/1.14.0/validate-methods.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('h-ui-3.0/lib/jquery.validation/1.14.0/messages_zh.js')}}"></script>

</body>
</html>
