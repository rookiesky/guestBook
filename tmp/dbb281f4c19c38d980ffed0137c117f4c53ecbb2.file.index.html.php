<?php /* Smarty version Smarty-3.0.8, created on 2019-01-25 15:09:05
         compiled from "/Users/rookie/Code/getbook/tpl/admin/index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:14475640305c4ab611e6eb24-13309612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb281f4c19c38d980ffed0137c117f4c53ecbb2' => 
    array (
      0 => '/Users/rookie/Code/getbook/tpl/admin/index/index.html',
      1 => 1446197984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14475640305c4ab611e6eb24-13309612',
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
