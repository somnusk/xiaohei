<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gbk" />
    <title>���Ƶ�������</title>
    <script src="http://img3.job1001.com/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="http://img3.job1001.com/js/ZeroClipboard/jquery.zclip.min.js"></script>
</head>
<body>
<input type="text" id="copy_value"/>
<input class="copy_btn" type="button" value="һ������"/>
<br/><br/>
<input type="text" id="copy_value"/>
<input class="copy_btn" type="button" value="һ������"/>
<br/><br/>
<input type="text" id="copy_value"/>
<input class="copy_btn" type="button" value="һ������"/>
<script>
    $(document).ready(function(){
        if ( window.clipboardData ) {
            $('.copy_btn').click(function() {
                window.clipboardData.setData("Text", $(this).prev('input').val());
                alert('���Ƴɹ���');
            });
        } else {
            $(".copy_btn").zclip({
                path:'http://img3.job1001.com/js/ZeroClipboard/ZeroClipboard.swf',
                copy:function(){return $(this).prev('input').val();},
                afterCopy:function(){alert('���Ƴɹ���');}
            });
        }
    });
</script>
</body>
</html>