<?php
/* Smarty version 3.1.32, created on 2018-10-04 14:50:38
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb660fec58647_97585028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10ba5e19a9d9df758ec765c201037561285a86bd' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/orders.tpl',
      1 => 1532338627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb660fec58647_97585028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46090795bb660fec4f421_11621202', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9390644085bb660fec51f11_89388902', "script");
}
/* {block "content"} */
class Block_46090795bb660fec4f421_11621202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_46090795bb660fec4f421_11621202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">

        <div class="col-md-3 ib_profile_width">
            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

        </div>

        <div class="col-md-9">


            <div class="ibox float-e-margins animated fadeIn">
                <div class="ibox-title">
                    <h3>Orders</h3>

                </div>
                <div class="ibox-content">

                    <div class="text-center" id="clxLoader">
                        <div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>
                    </div>

                    <div id="clxContent">

                    </div>



                </div>
            </div>



        </div>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_9390644085bb660fec51f11_89388902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_9390644085bb660fec51f11_89388902',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/numeric.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/footable/js/footable.all.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(function () {

            var $clxLoader = $('#clxLoader');
            var $clxContent = $('#clxContent');

            axios.get('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/x_orders').then(function (response) {
                $clxLoader.hide();
                $clxContent.html(response.data);
                $('.footable').footable();

                $('.amount').autoNumeric('init', {


                    dGroup: <?php echo $_smarty_tpl->tpl_vars['config']->value['thousand_separator_placement'];?>
,
                    aPad: <?php echo $_smarty_tpl->tpl_vars['config']->value['currency_decimal_digits'];?>
,
                    pSign: '<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_symbol_position'];?>
',
                    aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                    aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                    vMax: '9999999999999999.00',
                    vMin: '-9999999999999999.00'

                });

            }).catch(function (reason) {
                console.log(reason);
            })

        })
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
