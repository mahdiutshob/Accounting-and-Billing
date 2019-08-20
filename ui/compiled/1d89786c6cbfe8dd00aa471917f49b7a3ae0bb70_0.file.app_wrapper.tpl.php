<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:48:00
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/app_wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e7034c232_51105739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d89786c6cbfe8dd00aa471917f49b7a3ae0bb70' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/app_wrapper.tpl',
      1 => 1538680819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
  ),
),false)) {
function content_5bb66e7034c232_51105739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
}
