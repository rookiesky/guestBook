<?php /* Smarty version Smarty-3.0.8, created on 2019-03-27 17:48:18
         compiled from "/www/wwwroot/sex-guestbook.info/tpl/admin/message/reply.html" */ ?>
<?php /*%%SmartyHeaderCode:9264709695c9b46e2268874-32820840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cd500cce2b1f060ee8f3e0e365e94f79317f00' => 
    array (
      0 => '/www/wwwroot/sex-guestbook.info/tpl/admin/message/reply.html',
      1 => 1548402380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9264709695c9b46e2268874-32820840',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="megList">
  <div class="head"><img src="<?php echo HeadImg(array('qq'=>$_smarty_tpl->getVariable('m')->value['qq'],'mold'=>$_smarty_tpl->getVariable('g')->value['gHead']),$_smarty_tpl);?>
" /></div>
  <div class="meg">
    <div class="mTop">
      <span class="fl">网友：<?php echo $_smarty_tpl->getVariable('m')->value['name'];?>
&nbsp;&nbsp;&nbsp;发布时间：<?php echo dateTime(array('format'=>'Y年m月d日 H:i','timestamp'=>$_smarty_tpl->getVariable('m')->value['addtime']),$_smarty_tpl);?>
 - <?php echo formatTime(array('date'=>$_smarty_tpl->getVariable('m')->value['addtime'],'type'=>1),$_smarty_tpl);?>
</span>
      <span class="fr">ID:<?php echo $_smarty_tpl->getVariable('m')->value['id'];?>
</span>
      <div class="clear"></div>
    </div>
    <div class="mContent"><?php echo $_smarty_tpl->getVariable('m')->value['message'];?>
</div>
    <div class="mSm">
      <span class="fl"><?php echo $_smarty_tpl->getVariable('m')->value['address'];?>
（<?php echo $_smarty_tpl->getVariable('m')->value['ip'];?>
）</span>
      <span class="fr">赞（<?php echo $_smarty_tpl->getVariable('m')->value['good'];?>
）</span>
      <div class="clear"></div>
    </div>
  </div>
  <div class="clear"></div>
</div>
<hr />
<div class="form-group">
<?php if ($_smarty_tpl->getVariable('m')->value['status']=='no'){?>
<label class="radio-inline"><input name="status" type="radio" id="statusNo" value="no" checked="checked"> 隐藏</label>
<label class="radio-inline"><input name="status" type="radio" id="statusYes" value="yes"> 显示</label>
<?php }elseif($_smarty_tpl->getVariable('m')->value['status']=='yes'){?>
<label class="radio-inline"><input name="status" type="radio" id="statusNo" value="no"> 隐藏</label>
<label class="radio-inline"><input name="status" type="radio" id="statusYes" value="yes" checked="checked"> 显示</label>
<?php }?>
</div>
<div class="form-group">
<textarea class="form-control" rows="5" placeholder="回复内容……" id="replyVal"><?php echo $_smarty_tpl->getVariable('m')->value['reply'];?>
</textarea>
</div>
<button type="button" class="btn btn-success btn-block" onClick="replyButton('<?php echo $_smarty_tpl->getVariable('m')->value['id'];?>
')">提交回复</button>
