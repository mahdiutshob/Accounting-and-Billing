<?php
/* Smarty version 3.1.32, created on 2018-05-03 05:09:07
  from '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aead1b31b40d3_93984880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe40eefa2063cfe582889a1faa24927f85ac823' => 
    array (
      0 => '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/sections/header.tpl',
      1 => 1479230528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aead1b31b40d3_93984880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplheader']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if ($_smarty_tpl->tpl_vars['content_inner']->value != '') {?>
    <?php echo $_smarty_tpl->tpl_vars['content_inner']->value;?>

<?php }
}
}
