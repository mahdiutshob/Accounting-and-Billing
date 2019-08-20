<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:30
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/appearance_editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e16b830b8_82841619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4ec38dcf7a50b0144f6f46e91795a5764b57ed7' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/appearance_editor.tpl',
      1 => 1538680850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e16b830b8_82841619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18842092125bb66e16b80d35_19397748', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_18842092125bb66e16b80d35_19397748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18842092125bb66e16b80d35_19397748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row" id="ib_editor_canvas">
        <div class="col-lg-2">
            <div class="form-group">
                <label for="editor_file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                <select name="editor_file" id="editor_file" class="form-control">
                    <option value="no_file" selected="selected" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select File to Edit'];?>
</option>
                    <option value="language.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Language File'];?>
</option>
                    <option value="invoice_printer.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout Print'];?>
</option>
                    <option value="invoice_pdf.php"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Layout PDF'];?>
</option>


                </select>
            </div>
            <button type="submit" id="ib_btn_save" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
        </div>
        <div class="col-lg-10">


            <div id="editor" style="min-height: 800px;"></div>



        </div>
    </div>


<?php
}
}
/* {/block "content"} */
}
