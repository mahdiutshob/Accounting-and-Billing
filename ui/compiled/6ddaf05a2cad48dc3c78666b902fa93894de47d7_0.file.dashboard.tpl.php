<?php
/* Smarty version 3.1.32, created on 2018-10-04 14:47:11
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb6602f2cfcd1_90674070',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ddaf05a2cad48dc3c78666b902fa93894de47d7' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/woocommerce/views/dashboard.tpl',
      1 => 1536485638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6602f2cfcd1_90674070 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20832990495bb6602f2ce240_32481934', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18695867045bb6602f2cf512_32530135', "script");
}
/* {block "content"} */
class Block_20832990495bb6602f2ce240_32481934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20832990495bb6602f2ce240_32481934',
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
                    <h5>WooCommerce Dashboard</h5>
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
class Block_18695867045bb6602f2cf512_32530135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_18695867045bb6602f2cf512_32530135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            var $clxLoader = $('#clxLoader');
            var $clxContent = $('#clxContent');

            axios.get('<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
woocommerce/app/x_dashboard').then(function (response) {
                $clxLoader.hide();
                $clxContent.html(response.data);
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
