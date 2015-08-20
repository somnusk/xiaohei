<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title><<?php echo ($meta_title); ?>> - 虚拟现实</title>
    <!-- Bootstrap core CSS -->
    <link href="/xiaohei/xiaohei/Public/static/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="/xiaohei/xiaohei/Public/static/common.css">
    
    <!-- <script src="/xiaohei/xiaohei/Public/static/assets/js/chart-master/Chart.js"></script> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- 身体 -->

    <!-- 主体 -->
    <table class="table table-striped" >
        <thead>
        <tr>
            <th >系统信息</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                <td class="text"><?php echo ($key); ?>：</td>
                <td class="input"><?php echo ($v); ?></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

<div class="footer">
    <footer class="">小黑科技™</footer>
</div>
<!-- JS -->
<script src="/xiaohei/xiaohei/Public/static/jquery/jquery-1.11.3.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/bootstrap/js/bootstrap.min.js"></script>
<script src="/xiaohei/xiaohei/Public/static/common.js"></script>


</body>
</html>