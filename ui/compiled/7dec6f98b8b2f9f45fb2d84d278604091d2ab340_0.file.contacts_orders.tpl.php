<?php
/* Smarty version 3.1.32, created on 2018-05-03 05:20:27
  from '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/contacts_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aead45bb661b8_75936085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dec6f98b8b2f9f45fb2d84d278604091d2ab340' => 
    array (
      0 => '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/contacts_orders.tpl',
      1 => 1479230528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aead45bb661b8_75936085 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/add/" class="btn btn-primary waves-effect waves-light"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Order'];?>
</a>

<hr>

<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>
        <th>#</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order'];?>
 #</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
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

            <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</a> </td>
            <td>

                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
orders/view/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['ds']->value['ordernum'];?>
</a>

            </td>

            <td> <?php ob_start();
echo $_smarty_tpl->tpl_vars['ds']->value['date_added'];
$_prefixVariable1 = ob_get_clean();
echo date($_smarty_tpl->tpl_vars['_c']->value['df'],strtotime($_prefixVariable1));?>
 </td>
            <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['cname'];?>
</td>

            <td>
                <?php echo $_smarty_tpl->tpl_vars['ds']->value['amount'];?>


            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'Active') {?>
                    <span class="label label-success"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                <?php } else { ?>
                    <span class="label label-danger"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['ds']->value['status']]);?>
</span>
                <?php }?>
            </td>
        </tr>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table><?php }
}
