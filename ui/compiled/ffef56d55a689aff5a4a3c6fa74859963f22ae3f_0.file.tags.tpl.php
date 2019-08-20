<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:57
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e31832825_62864679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffef56d55a689aff5a4a3c6fa74859963f22ae3f' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/tags.tpl',
      1 => 1538682048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e31832825_62864679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10643313475bb66e3182d958_18532836', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_10643313475bb66e3182d958_18532836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10643313475bb66e3182d958_18532836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage Tags'];?>
 </h5>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>

                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tag'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                    <tr>

                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['text'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-xs cdelete" id="iid<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
