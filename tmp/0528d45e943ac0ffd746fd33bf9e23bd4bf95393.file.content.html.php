<?php /* Smarty version Smarty-3.0.8, created on 2019-01-25 15:09:06
         compiled from "/Users/rookie/Code/getbook/tpl/admin/index/content.html" */ ?>
<?php /*%%SmartyHeaderCode:15505293765c4ab61236f853-33030585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0528d45e943ac0ffd746fd33bf9e23bd4bf95393' => 
    array (
      0 => '/Users/rookie/Code/getbook/tpl/admin/index/content.html',
      1 => 1544108910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15505293765c4ab61236f853-33030585',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主体</title>
<link href="tpl/admin/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/jquery.min.js"></script>
<link href="tpl/admin/css/Bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tpl/admin/css/Bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="admin-bread">
  <span class="fr">
    <?php $_template = new Smarty_Internal_Template("admin/index/smalltop.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
  </span>
  
  <ul class="fl">
      <li><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'content'),$_smarty_tpl);?>
"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 开始</a></li>
      <li>/</li>
      <li>后台首页</li>
  </ul>
</div>

<!--content-->
<div class="content">
<div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> 系统信息</div>
      <!-- Table -->
      <table class="table">
      <thead>
      </thead>
    <tbody>
      <tr>
        <td scope="row">当前域名</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['url'];?>
</td>
        <td>操作指南</td>
        <td><a href="http://syguestbook.logphp.com" target="_blank">点击进入</a></td>
        </tr>
      <tr>
        <td scope="row">欢迎管理员</td>
        <td><?php echo $_SESSION['admin']['username'];?>
 (<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'admin','a'=>'Administrator','id'=>$_SESSION['admin']['id']),$_smarty_tpl);?>
" target="mainFrame">修改密码</a>)</td>
        <td>管理等级</td>
        <td><?php echo $_SESSION['admin']['admin'];?>
</td>
      </tr>
      <tr>
        <td scope="row">程序系统</td>
        <td><?php echo @WEBNAME;?>
</td>
        <td>系统版本</td>
        <td><?php echo @VERSIONNUMBER;?>
</td>
      </tr>
      <tr>
        <td width="120" scope="row">PHP版本</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['phpv'];?>
</td>
        <td width="120">运行方式</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['yxfs'];?>
</td>
        </tr>
      <tr>
        <td scope="row">最大占用内存</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['memory_limit'];?>
</td>
        <td>脚本超时时间</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['max_execution_time'];?>
 秒</td>
      </tr>
      <tr>
        <td scope="row">Curl支持</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['curl_init'];?>
</td>
        <td>FTP支持</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['ftp_login'];?>
</td>
      </tr>
      <tr>
        <td scope="row">Session支持</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['session_start'];?>
</td>
        <td>Cookie 支持</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['CookieYes'];?>
</td>
      </tr>
      <tr>
        <td scope="row">上传限制</td>
        <td><?php echo $_smarty_tpl->getVariable('fuwuqi')->value['upload_max_filesize'];?>
</td>
        <td><span style="font-size:12px">问题反馈</span></td>
        <td><a href="http://syguestbook.sucainiu.com" target="_blank">随意留言板</a></td>
      </tr>
      </tbody>
    </table>
    </div>
</div><!--content End-->
</body>
</html>