<?php /* Smarty version Smarty-3.0.8, created on 2019-01-25 07:59:58
         compiled from "/home/sexguestbook/public_html/tpl/system/alert/success.html" */ ?>
<?php /*%%SmartyHeaderCode:7244851525c4ac1fe7d17f8-64555823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de521c758a51fff1df654a5720a90ac7fc7aba7d' => 
    array (
      0 => '/home/sexguestbook/public_html/tpl/system/alert/success.html',
      1 => 1548402398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7244851525c4ac1fe7d17f8-64555823',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->getVariable('time')->value;?>
;URL=<?php echo $_smarty_tpl->getVariable('url')->value;?>
" />
<title>操作成功提示</title>
<link rel="stylesheet" type="text/css" href="tpl/system/alert/success.css"/>
</head>

<body>
<div class="container">
    <h3 class="h3success">操作成功提示</h3>
    <div class="success">
        <h4 class="infotitle_success"><?php echo $_smarty_tpl->getVariable('msg')->value;?>
</h4>
        <p class="marginbot"><a href="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" class="lightlink_success">如果您的浏览器<?php echo $_smarty_tpl->getVariable('time')->value;?>
秒内没有自动跳转，请点击这里</a></p>
    </div>
</div>
</body>
</html>
