<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:45:13
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/transactions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66dc906fde2_70706270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bd24357adf0c0d20ffa9a9c6b28765ffa93f3b5' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/transactions.tpl',
      1 => 1538682128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66dc906fde2_70706270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8591120205bb66dc90627c4_79287662', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_8591120205bb66dc90627c4_79287662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8591120205bb66dc90627c4_79287662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Records'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['found'];?>
. <?php echo $_smarty_tpl->tpl_vars['_L']->value['Page'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['page'];?>
 <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <?php echo $_smarty_tpl->tpl_vars['paginator']->value['lastpage'];?>
. </h5>

                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-bordered sys_table">
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>

                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>

                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Dr'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
?>
                                <tr class="<?php if ($_smarty_tpl->tpl_vars['ds']->value['cr'] == '0.00') {?>warning <?php } else { ?>info<?php }?>">
                                    <td><?php echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                                                        
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Income') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Expense') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense'];?>

                                        <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['type'] == 'Transfer') {?>
                                            <?php echo $_smarty_tpl->tpl_vars['_L']->value['Transfer'];?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>

                                        <?php }?>
                                    </td>

                                    <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>
                                    <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['dr'];?>
</td>
                                    <td class="text-right amount"><?php echo $_smarty_tpl->tpl_vars['ds']->value['cr'];?>
</td>
                                    <td class="text-right"><span class="amount<?php if ($_smarty_tpl->tpl_vars['ds']->value['bal'] < 0) {?> text-red<?php }?>" ><?php echo $_smarty_tpl->tpl_vars['ds']->value['bal'];?>
</span></td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/manage/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</a></td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                        </table>
                    </div>


                </div>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['paginator']->value['contents'];?>

        </div>

        <!-- Widget-1 end-->

        <!-- Widget-2 end-->
    </div> <!-- Row end-->


    <!-- Row end-->


    <!-- Row end-->

<?php
}
}
/* {/block "content"} */
}
