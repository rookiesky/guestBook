<?php /* Smarty version Smarty-3.0.8, created on 2019-03-31 20:45:09
         compiled from "/www/wwwroot/sex-guestbook.info/tpl/admin/adminuser/ListAdmin.html" */ ?>
<?php /*%%SmartyHeaderCode:18141962845ca0b655e15f35-66264225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56ab03e552178adf4af859b4d5d81cff1e58a929' => 
    array (
      0 => '/www/wwwroot/sex-guestbook.info/tpl/admin/adminuser/ListAdmin.html',
      1 => 1548402389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18141962845ca0b655e15f35-66264225',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo @WEBNAME;?>
</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/tanchuang/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<!--admin-bread-->
<div class="admin-bread">
  <span class="fr">
    <?php $_template = new Smarty_Internal_Template("admin/index/smalltop.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </span>
  
  <ul class="fl">
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'content'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 开始</a></li>
      <li>/</li>
      <li><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ul>
</div><!--admin-bread End-->

<!--content-->
<div class="content">

<!--panel panel-default-->
<div class="panel panel-default">
<div class="panel-heading">
<span class="fl">
<a class="btn btn-success" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'add'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 添加管理员</a>
</span>

<span class="fr" style="width:300px;"></span>
<div class="clear"></div>
</div>
<table  class="table table-hover table-bordered">
  <tr class="active">
    <td width="50" align="center" class="bgc"><strong>ID</strong></td>
    <td class="bgc"><strong>帐号</strong></td>
    <td align="center" class="bgc"><strong>级别</strong></td>
    <td align="center" class="bgc"><strong>留言板绑定</strong></td>
    <td width="150" align="center" class="bgc"><strong>操作</strong></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['one'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('results')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['one']->key => $_smarty_tpl->tpl_vars['one']->value){
?>
  <tr>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['one']->value['username'];?>
</td>
    <td align="center"><?php if ($_smarty_tpl->tpl_vars['one']->value['admin']=='admin'){?>系统管理员<?php }elseif($_smarty_tpl->tpl_vars['one']->value['admin']=='user'){?>普通管理员<?php }?></td>
    <td align="center"><?php echo GidToGname(array('gid'=>$_smarty_tpl->tpl_vars['one']->value['gid'],'admin'=>$_smarty_tpl->tpl_vars['one']->value['admin']),$_smarty_tpl);?>
</td>
    <td align="center">
      <a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'update','id'=>$_smarty_tpl->tpl_vars['one']->value['id']),$_smarty_tpl);?>
">编辑</a>&nbsp;&nbsp;<a class="btn btn-danger btn-xs" href="javascript:void(0);" onclick="delconfirm(<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['one']->value['username'];?>
');" title="Delete">删除</a>
    </td>
  </tr>
  <?php }} ?>
</table>
</div><!--panel panel-default End-->

<!--分页-->
<?php if ($_smarty_tpl->getVariable('pager')->value){?>
<div class="pager">
共有记录<?php echo $_smarty_tpl->getVariable('pager')->value['total_count'];?>
条，共有<?php echo $_smarty_tpl->getVariable('pager')->value['total_page'];?>
页（每页<?php echo $_smarty_tpl->getVariable('pager')->value['page_size'];?>
条）：
<?php $_smarty_tpl->tpl_vars['max_page'] = new Smarty_variable(5, null, null);?>
<!--每页最大页码数-->
<!--开始及结束页码--> 
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']%$_smarty_tpl->getVariable('max_page')->value==0){?>
<?php $_smarty_tpl->tpl_vars['start_page'] = new Smarty_variable(floor($_smarty_tpl->getVariable('pager')->value['current_page']/$_smarty_tpl->getVariable('max_page')->value)*$_smarty_tpl->getVariable('max_page')->value+1-$_smarty_tpl->getVariable('max_page')->value, null, null);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['start_page'] = new Smarty_variable(floor($_smarty_tpl->getVariable('pager')->value['current_page']/$_smarty_tpl->getVariable('max_page')->value)*$_smarty_tpl->getVariable('max_page')->value+1, null, null);?>
<?php }?>     
<?php if (($_smarty_tpl->getVariable('start_page')->value+$_smarty_tpl->getVariable('max_page')->value)<=$_smarty_tpl->getVariable('pager')->value['total_page']){?>
<?php $_smarty_tpl->tpl_vars['end_page'] = new Smarty_variable($_smarty_tpl->getVariable('start_page')->value+$_smarty_tpl->getVariable('max_page')->value-1, null, null);?>
<?php }else{ ?>
<?php $_smarty_tpl->tpl_vars['end_page'] = new Smarty_variable($_smarty_tpl->getVariable('pager')->value['total_page'], null, null);?>
<?php }?>
<?php if ($_smarty_tpl->getVariable('start_page')->value<=1&&$_smarty_tpl->getVariable('pager')->value['current_page']<=1){?>
首 | 
« |         
<?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['total_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
#pl">首</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
#pl">«</a> | 
<?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['current_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
#pl">首</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
#pl">«</a> | 
<?php }else{ ?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
#pl">首</a> |  
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
#pl">«</a> | 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']-$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
#pl">-<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a> |  
<?php }?>
<!--开始循环页码，同时如果循环到当前页设置属性为active-->
<?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>        
<?php if ($_smarty_tpl->tpl_vars['thepage']->value<=$_smarty_tpl->getVariable('end_page')->value&&$_smarty_tpl->tpl_vars['thepage']->value>=$_smarty_tpl->getVariable('start_page')->value){?>  
<?php if ($_smarty_tpl->tpl_vars['thepage']->value==$_smarty_tpl->getVariable('pager')->value['current_page']){?>
  <b><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</b> | 
<?php }else{ ?>
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
#pl"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a> |                  
<?php }?>
<?php }?>
<?php }} ?>
<?php if ($_smarty_tpl->getVariable('end_page')->value==$_smarty_tpl->getVariable('pager')->value['total_page']){?> 
<?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->getVariable('pager')->value['last_page']){?>
» | 尾 
<?php }else{ ?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
#pl">»</a> |  
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
#pl">尾</a>
<?php }?>
<?php }else{ ?> 
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']+$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
#pl">+<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a> |  
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
#pl">»</a> |  
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
#pl">尾</a>
<?php }?> 
</div>
<?php }?>
<!--分页 end-->

</div><!--content End-->
<script>
function delconfirm(id,username){
	if( window.confirm("确定删除“" + username + "”？") ){
		window.location = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'Administrator','a'=>'del'),$_smarty_tpl);?>
&id=" + id;
	}
}
</script>
</body>
</html>