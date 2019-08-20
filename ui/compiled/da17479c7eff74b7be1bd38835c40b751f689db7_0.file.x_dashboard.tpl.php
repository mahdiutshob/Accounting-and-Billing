<?php
/* Smarty version 3.1.32, created on 2018-10-04 16:39:23
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/x_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb67a7b6a6ae8_19092133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da17479c7eff74b7be1bd38835c40b751f689db7' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/x_dashboard.tpl',
      1 => 1538685546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb67a7b6a6ae8_19092133 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-4">
        <a class="dashboard-stat blue" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/customers/">
            <div class="visual">
                <i class="fa fa-calculator"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_order_amount']->value;?>
</span>
                </div>
                <div class="desc text-right"> Total Order Amount </div>
            </div>
        </a>
    </div>
    <div class="col-md-4">
        <a class="dashboard-stat green" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/orders/">
            <div class="visual">
                <i class="fa fa-cubes"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span class="amount"><?php echo $_smarty_tpl->tpl_vars['total_customers']->value;?>
</span>
                </div>
                <div class="desc text-right"> Total Customers </div>
            </div>
        </a>
    </div>

</div><?php }
}
