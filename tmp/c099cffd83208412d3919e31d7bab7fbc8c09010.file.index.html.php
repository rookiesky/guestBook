<?php /* Smarty version Smarty-3.0.8, created on 2019-03-27 17:38:56
         compiled from "/www/wwwroot/sex-guestbook.info/tpl/admin/index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:4552482275c9b44b05ba414-75290845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c099cffd83208412d3919e31d7bab7fbc8c09010' => 
    array (
      0 => '/www/wwwroot/sex-guestbook.info/tpl/admin/index/index.html',
      1 => 1548402385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4552482275c9b44b05ba414-75290845',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo @WEBNAME;?>
</title>
</head>
<frameset rows="*" cols="180,*" framespacing="0" frameborder="no" border="0">
  <frame src="<?php echo $_smarty_tpl->getVariable('url')->value;?>
" name="leftFrame" scrolling="auto" noresize="noresize" id="leftFrame" title="leftFrame" />
  <frameset rows="50,*" frameborder="no" border="0" framespacing="0">
		<frame src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>"admin",'a'=>"top"),$_smarty_tpl);?>
" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" title="topFrame" />
		<frame src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>"admin",'a'=>"content"),$_smarty_tpl);?>
" name="mainFrame" id="mainFrame" title="mainFrame" />
	</frameset>
</frameset>
<noframes><body>
</body></noframes>
</html>
