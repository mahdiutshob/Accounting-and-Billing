<?php
/* Smarty version 3.1.32, created on 2018-10-04 15:46:29
  from '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/appearance_customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb66e15143687_48645871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a97173b3087847e369ea5ab72ecfa7e216ed45' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/ui/theme/ibilling/appearance_customize.tpl',
      1 => 1538680835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb66e15143687_48645871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2373140565bb66e1513eb22_72531298', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block "content"} */
class Block_2373140565bb66e1513eb22_72531298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2373140565bb66e1513eb22_72531298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
                                

                


        

                                <div class="col-md-6">


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</h5>


                </div>
                <div class="ibox-content">

                    <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/system/logo.png" alt="Logo">
                    <br><br>

                    <form role="form" name="logo" enctype="multipart/form-data" method="post"
                          action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/logo-post/">
                        <div class="form-group">
                            <label for="file"><?php echo $_smarty_tpl->tpl_vars['_L']->value['File'];?>
</label>
                            <input type="file" id="file" name="file">

                            <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['_L']->value['This will replace existing logo'];?>
 -
                                application/storage/system/logo.png</p>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>


                </div>
            </div>





            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Portal Custom Scripts'];?>
</h5>


                </div>
                <div class="ibox-content">


                    <form role="form" name="logo" method="post"
                          action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/custom_scripts/">
                        <div class="form-group">
                            <label for="header_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Header Scripts'];?>
</label>

                            <textarea class="form-control" id="header_scripts" name="header_scripts"
                                      rows="4"><?php echo $_smarty_tpl->tpl_vars['_c']->value['header_scripts'];?>
</textarea>

                        </div>
                        <div class="form-group">
                            <label for="footer_scripts"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Footer Scripts'];?>
</label>

                            <textarea class="form-control" id="footer_scripts" name="footer_scripts"
                                      rows="4"><?php echo $_smarty_tpl->tpl_vars['_c']->value['footer_scripts'];?>
</textarea>

                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                    </form>


                </div>
            </div>


        </div>




    </div>


<?php
}
}
/* {/block "content"} */
}
