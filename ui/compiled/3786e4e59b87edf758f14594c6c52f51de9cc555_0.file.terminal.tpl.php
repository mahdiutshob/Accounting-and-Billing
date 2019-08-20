<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:24
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/terminal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e105bb669_10582612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3786e4e59b87edf758f14594c6c52f51de9cc555' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/terminal.tpl',
      1 => 1538682099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e105bb669_10582612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3931838305bb66e105ba102_79399143', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_3931838305bb66e105ba102_79399143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3931838305bb66e105ba102_79399143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Terminal'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <div id="terminal">

                        <div id="output"></div>

                        <div id="command">
                            <div id="prompt">&gt;</div>
                            <input type="text" autocapitalize="off">
                        </div>

                    </div>

                </div>
            </div>



        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
