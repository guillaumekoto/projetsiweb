<?php /* Smarty version Smarty-3.1.8, created on 2012-03-19 22:36:09
         compiled from "./include/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10410974844f679bdb577c33-06794211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8e5ab74a0033f20e4e80cafab8cdc1666ac694f' => 
    array (
      0 => './include/smarty/templates/index.tpl',
      1 => 1332192943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10410974844f679bdb577c33-06794211',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f679bdb6b1fc0_89394021',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f679bdb6b1fc0_89394021')) {function content_4f679bdb6b1fc0_89394021($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("site.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

Page d'accueil
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>