<?php
/* Smarty version 3.1.32, created on 2018-10-01 04:37:25
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/wrapper.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb1dcc5a5c7e2_36008848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce8090d31ff0db5cbc44eb958e4b487d2ce441f' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/wrapper.tpl',
      1 => 1479230528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:../../../".((string)$_smarty_tpl->tpl_vars[\'_pd\']->value)."/views/".((string)$_smarty_tpl->tpl_vars[\'_include\']->value).".tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5bb1dcc5a5c7e2_36008848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:../../../".((string)$_smarty_tpl->tpl_vars['_pd']->value)."/views/".((string)$_smarty_tpl->tpl_vars['_include']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
