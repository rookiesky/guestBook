<?php /* Smarty version Smarty-3.0.8, created on 2019-03-27 17:46:42
         compiled from "/www/wwwroot/sex-guestbook.info/tpl/admin/message/ListMessage.html" */ ?>
<?php /*%%SmartyHeaderCode:10327546295c9b46821116c6-24756144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1541881091271b57666b73b7d42e7227164eee0' => 
    array (
      0 => '/www/wwwroot/sex-guestbook.info/tpl/admin/message/ListMessage.html',
      1 => 1548402380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10327546295c9b46821116c6-24756144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/www/wwwroot/sex-guestbook.info/SpeedPHP/Drivers/Smarty/plugins/function.cycle.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
 - <?php echo @WEBNAME;?>
</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="tpl/admin/css/megList.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
function reply(mid,gid)
{
	$.ajax({
	  type:"POST",
	  url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminMessage','a'=>'reply'),$_smarty_tpl);?>
",
	  data:"mid="+mid+"&gid="+gid,
	  cache:false,
	  success:function(data){
	  $("#replyForm").html(data);
	  }
});
return false;
}

function replyButton(mid)
{
	var reply = $("#replyVal").val();
	var status = $("input[name='status']:checked").val();
	$.ajax({
	  type:"POST",
	  url:"<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminMessage','a'=>'AjaxReplyPost'),$_smarty_tpl);?>
",
	  data:"mid="+mid+"&reply="+reply+"&status="+status,
	  cache:false,
	  success:function(data){
		if(data!='no')
		{
			$('#replyModal').modal('hide');
			$("#reply"+mid).html('<div class="reply"><div class="con">'+data+'</div></div>');
		}
		else
		{
			$("#replyMessage").html('回复失败');
			alert('回复失败');
		}
		
	  }
});
return false;

}

</script>
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
      <li>/</li>
      <li><?php echo $_smarty_tpl->getVariable('g')->value['gName'];?>
</li>
  </ul>
</div><!--admin-bread End-->

<!--content-->
<div class="content">

<h4 style="margin-top:0px;"><?php echo $_smarty_tpl->getVariable('g')->value['gName'];?>
</h4>
<p><?php echo MegSum(array('gid'=>$_smarty_tpl->getVariable('g')->value['id']),$_smarty_tpl);?>
 - 管理员：<?php echo adminuserList(array('gid'=>$_smarty_tpl->getVariable('g')->value['id']),$_smarty_tpl);?>
</p>

<?php if ($_smarty_tpl->getVariable('lists')->value){?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('lists')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
?>
<div class="<?php echo smarty_function_cycle(array('values'=>'megList bg1,megList bg2'),$_smarty_tpl);?>
">
  <div class="head"><img src="<?php echo HeadImg(array('qq'=>$_smarty_tpl->tpl_vars['m']->value['qq'],'mold'=>$_smarty_tpl->getVariable('g')->value['gHead']),$_smarty_tpl);?>
" /></div>
  <div class="meg">
    <div class="mTop">
      <span class="fl">网友：<?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
&nbsp;&nbsp;&nbsp;发布时间：<?php echo dateTime(array('format'=>'Y年m月d日 H:i','timestamp'=>$_smarty_tpl->tpl_vars['m']->value['addtime']),$_smarty_tpl);?>
 - <?php echo formatTime(array('date'=>$_smarty_tpl->tpl_vars['m']->value['addtime'],'type'=>1),$_smarty_tpl);?>
</span>
      <span class="fr">ID:<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
 - <?php if ($_smarty_tpl->tpl_vars['m']->value['status']=='no'){?><span class="text-danger"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> 隐藏</span><?php }elseif($_smarty_tpl->tpl_vars['m']->value['status']=='yes'){?><span class="text-success"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 显示</span><?php }?></span>
      <div class="clear"></div>
    </div>
    <div class="mContent">
      <?php echo $_smarty_tpl->tpl_vars['m']->value['message'];?>

      <?php if ($_smarty_tpl->tpl_vars['m']->value['reply']){?>
      <div class="reply">
        <div class="tit">管理员<?php echo $_smarty_tpl->tpl_vars['m']->value['replyAdmin'];?>
回复：</div>
        <div class="con" id="reply<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</div>
      </div>
      <?php }else{ ?>
        <div id="reply<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['reply'];?>
</div>
      <?php }?>
    </div>
    <div class="mSm">
      <span class="fl"><?php echo $_smarty_tpl->tpl_vars['m']->value['address'];?>
（<?php echo $_smarty_tpl->tpl_vars['m']->value['ip'];?>
） - 赞（<?php echo $_smarty_tpl->tpl_vars['m']->value['good'];?>
） - <a class="text-danger" href="javascript:void(0);" onclick="delconfirm('id','<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
','确定删除(ID:<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
)的留言吗？');"><span class="glyphicon glyphicon-remove"></span> 删除单个留言</a> - <a class="text-danger" href="javascript:void(0);" onclick="delconfirm('ip','<?php echo $_smarty_tpl->tpl_vars['m']->value['ip'];?>
','确定删除(IP:<?php echo $_smarty_tpl->tpl_vars['m']->value['ip'];?>
)下的全部留言吗？');"><span class="glyphicon glyphicon-remove"></span> 删除同IP留言</a></span>
      <span class="fr"><a href="javascript:void(0);" onclick="reply('<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
','<?php echo $_smarty_tpl->getVariable('g')->value['id'];?>
')" data-toggle="modal" data-target="#replyModal" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-comment"></span> 回复/审核</a></span>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php }} ?>
<?php }else{ ?>
<div class="alert alert-warning" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> 暂无留言！</div>
<?php }?>

<!--分页-->
<?php if ($_smarty_tpl->getVariable('pager')->value){?>

<div class="b15"></div>

<div class="pag">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">
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
        <a class="Invalid">首页</a>
        <a class="Invalid">上一页</a>
      <?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['total_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a>
      <?php }elseif($_smarty_tpl->getVariable('pager')->value['current_page']>1&&$_smarty_tpl->getVariable('pager')->value['current_page']<=$_smarty_tpl->getVariable('max_page')->value){?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">上一页</a>
      <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['first_page']),$_smarty_tpl);?>
">首页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['prev_page']),$_smarty_tpl);?>
">«</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']-$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
">-<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a>
      <?php }?>
      <!--开始循环页码，同时如果循环到当前页设置属性为active-->
      <?php  $_smarty_tpl->tpl_vars['thepage'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['all_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['thepage']->key => $_smarty_tpl->tpl_vars['thepage']->value){
?>        
      <?php if ($_smarty_tpl->tpl_vars['thepage']->value<=$_smarty_tpl->getVariable('end_page')->value&&$_smarty_tpl->tpl_vars['thepage']->value>=$_smarty_tpl->getVariable('start_page')->value){?>  
          <?php if ($_smarty_tpl->tpl_vars['thepage']->value==$_smarty_tpl->getVariable('pager')->value['current_page']){?>
              <a class="present"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
              <?php }else{ ?>
              <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->tpl_vars['thepage']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['thepage']->value;?>
</a>
          <?php }?>
       <?php }?>
      <?php }} ?>
      <?php if ($_smarty_tpl->getVariable('end_page')->value==$_smarty_tpl->getVariable('pager')->value['total_page']){?> 
      <?php if ($_smarty_tpl->getVariable('pager')->value['current_page']==$_smarty_tpl->getVariable('pager')->value['last_page']){?>
        <a class="Invalid">下一页</a>
        <a class="Invalid">尾页</a>
      <?php }else{ ?>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
      <?php }?>
      <?php }else{ ?> 
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['current_page']+$_smarty_tpl->getVariable('max_page')->value),$_smarty_tpl);?>
">+<?php echo $_smarty_tpl->getVariable('max_page')->value;?>
</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['next_page']),$_smarty_tpl);?>
">下一页</a>
        <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>$_smarty_tpl->getVariable('c')->value,'a'=>$_smarty_tpl->getVariable('a')->value,'gid'=>$_smarty_tpl->getVariable('g')->value['id'],'page'=>$_smarty_tpl->getVariable('pager')->value['last_page']),$_smarty_tpl);?>
">尾页</a>
      <?php }?> 
      </div>
	</td>
  </tr>
</table>
</div>
<div class="b15"></div>
<?php }?>
<!--分页 end-->


<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModal">
  <div class="modal-dialog modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="replyModal">管理员回复：</h4>
      </div>
      <div class="modal-body">
		<div id="replyForm"></div>
      </div>
    </div>
  </div>
</div>


</div><!--content End-->
<script>
function delconfirm(mold,v,tit){
	if( window.confirm(tit) ){
		window.location = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'adminMessage','a'=>'del'),$_smarty_tpl);?>
&mold="+mold+"&v="+v;
	}
}
</script>
</body>
</html>