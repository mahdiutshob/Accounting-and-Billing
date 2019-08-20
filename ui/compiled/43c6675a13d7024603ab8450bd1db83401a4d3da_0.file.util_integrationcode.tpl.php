<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:19
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/util_integrationcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e0b1347a8_05960619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43c6675a13d7024603ab8450bd1db83401a4d3da' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/util_integrationcode.tpl',
      1 => 1538682247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e0b1347a8_05960619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6815272395bb66e0b132567_44683294', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_6815272395bb66e0b132567_44683294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6815272395bb66e0b132567_44683294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-8 col-xs-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Integration Code'];?>
</h5>

                </div>
                <div class="ibox-content">
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Login'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_login']->value;?>
</code></pre>
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
</h4>
                    <pre class="line-numbers language-markup"><code><?php echo $_smarty_tpl->tpl_vars['form_client_register']->value;?>
</code></pre>

                </div>
            </div>
        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
