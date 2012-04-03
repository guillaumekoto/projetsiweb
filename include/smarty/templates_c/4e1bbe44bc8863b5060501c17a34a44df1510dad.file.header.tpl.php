<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 15:43:11
         compiled from "./include/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12986194924f67a70eebbb62-19717993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e1bbe44bc8863b5060501c17a34a44df1510dad' => 
    array (
      0 => './include/smarty/templates/header.tpl',
      1 => 1333460584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12986194924f67a70eebbb62-19717993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f67a70eecb671_65149299',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f67a70eecb671_65149299')) {function content_4f67a70eecb671_65149299($_smarty_tpl) {?><HTML>
<HEAD>
<TITLE><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</TITLE>
</HEAD>
<BODY bgcolor="#ffffff">
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
<?php }} ?>