<?php /* Smarty version Smarty-3.0.8, created on 2019-01-25 15:09:06
         compiled from "/Users/rookie/Code/getbook/tpl/admin/index/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:5871724335c4ab61223f840-08952067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ebd23ab8fd060ea163b0c670062f139d850516' => 
    array (
      0 => '/Users/rookie/Code/getbook/tpl/admin/index/menu.html',
      1 => 1544108858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5871724335c4ab61223f840-08952067',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台边栏</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
<style>
body,html{height:100%}
</style>
<script language="javascript" type="text/javascript">
$(function () {
$('.con ul li a').click(function () {
$('.con ul li a').removeClass('hover'); 
$(this).addClass('hover');  
})
})
</script>
</head>

<body style="background-color:#f2f9fd">
<div class="sidebar">
  <div class="logo"></div>
  <div class="con">
  
  <?php if (!$_smarty_tpl->getVariable('fenlei')->value||$_smarty_tpl->getVariable('fenlei')->value=='guestbook'){?>
  
  <ul>
  	<li class="tit"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 留言板管理</li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'ListGuestbook'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 留言板列表</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminGuestbook','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 留言板添加</a></li>
    <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'guestbookCall','a'=>'ListGuestbookCall'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> 留言板调用</a></li>
  </ul>
  
  <?php }elseif($_smarty_tpl->getVariable('fenlei')->value=='adminuser'){?>
  
  <ul>
      <li class="tit">管理员管理</li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'ListAdmin'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 管理员列表</a></li>
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'add'),$_smarty_tpl);?>
" target="mainFrame"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加管理员</a></li>
  </ul>
    
  <?php }?>
  
  <!--谢谢您的支持，全开源不容易，请勿删除版权信息-->
  <div class="zhichi">问题反馈：<a href="http://syguestbook.sucainiu.com" target="_blank">By 随意留言板</a></div>
  
  </div>
</div>
</body>
</html>