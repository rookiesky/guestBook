<?php /* Smarty version Smarty-3.0.8, created on 2019-01-25 15:09:06
         compiled from "/Users/rookie/Code/getbook/tpl/admin/index/top.html" */ ?>
<?php /*%%SmartyHeaderCode:13155510275c4ab6125f44c6-11449744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe4ff3ad13952a0eb171b2514bc8114bcaaa9205' => 
    array (
      0 => '/Users/rookie/Code/getbook/tpl/admin/index/top.html',
      1 => 1447341416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13155510275c4ab6125f44c6-11449744',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
$(function () {
$('ul.list-inline li a').click(function () {
$('ul.list-inline li a').removeClass('hover'); 
$(this).addClass('hover');  
})
})
</script>
</head>

<body>
<div class="top">
<ul class="list-inline">
  <?php if ($_SESSION['admin']['admin']=='admin'){?>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'menu','fenlei'=>'guestbook'),$_smarty_tpl);?>
"  target="leftFrame"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> 留言板</a></li>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'menu','fenlei'=>'adminuser'),$_smarty_tpl);?>
" target="leftFrame"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 管理员</a></li>
  <?php }?>
  
</ul>
<ul class="fr">
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'main','a'=>'logout'),$_smarty_tpl);?>
" target="_top">注销</a></li>
  <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'update','id'=>$_SESSION['admin']['id']),$_smarty_tpl);?>
" target="mainFrame">修改密码</a></li>
  <li>管理员 [<?php echo $_SESSION['admin']['username'];?>
]</li>
  <li><a target="_blank" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'guestbook'),$_smarty_tpl);?>
">前台首页</a></li>
</ul>
</div>
</body>
</html>
