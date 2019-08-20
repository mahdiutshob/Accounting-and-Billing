<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:45:13
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/balance-sheet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66dc9c30696_70878331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3849c5f4ad31c33932c346e45a5adce0a4197da' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/balance-sheet.tpl',
      1 => 1538680905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66dc9c30696_70878331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15388267195bb66dc9c27e83_36804489', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_15388267195bb66dc9c27e83_36804489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15388267195bb66dc9c27e83_36804489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance Sheet'];?>
 </h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-bordered sys_table">

                        <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>

                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                            <tr>

                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>

                                <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['balance'] < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['ds']->value['balance'];?>
</span></td>

                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>
                    <table class="table invoice-total">
                        <tbody>

                        <tr>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['TOTAL'];?>
 :</strong></td>
                            <td><strong><span class="amount<?php if ($_smarty_tpl->tpl_vars['tbal']->value < 0) {?> text-red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['tbal']->value;?>
</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>




        <!-- Widget-2 end-->
    </div> <!-- Row end-->


<?php
}
}
/* {/block "content"} */
}
