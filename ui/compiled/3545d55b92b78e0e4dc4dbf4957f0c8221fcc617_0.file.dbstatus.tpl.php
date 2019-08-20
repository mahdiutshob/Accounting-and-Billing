<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:15
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/dbstatus.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e071dc368_26436247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3545d55b92b78e0e4dc4dbf4957f0c8221fcc617' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/dbstatus.tpl',
      1 => 1538681224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e071dc368_26436247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17010593825bb66e071d7f80_01277808', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_17010593825bb66e071d7f80_01277808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17010593825bb66e071d7f80_01277808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Database Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </h5>
            <div class="ibox-tools">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download Database Backup'];?>
</a>
            </div>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered table-hover sys_table">
                <thead>
                <tr>
                    <th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table Name'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>

                </tr>
                </thead>
                <tbody>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tables']->value, 'tbl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>

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
