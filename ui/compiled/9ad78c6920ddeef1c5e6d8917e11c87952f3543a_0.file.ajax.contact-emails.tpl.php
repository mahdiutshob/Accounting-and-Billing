<?php
/* Smarty version 3.1.32, created on 2018-05-03 05:20:35
  from '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/ajax.contact-emails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aead4639d5ce4_46484287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad78c6920ddeef1c5e6d8917e11c87952f3543a' => 
    array (
      0 => '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/ajax.contact-emails.tpl',
      1 => 1479230528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aead4639d5ce4_46484287 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mail-box">


    <div class="mail-body">

        <form class="form-horizontal" method="get">
            <div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
:</label>

                <div class="col-sm-10"><input type="text" id="toemail" name="toemail" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
" disabled></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
:</label>

                <div class="col-sm-10"><input type="text" id="subject" name="subject" class="form-control" value=""></div>
            </div>
        </form>

    </div>

    <div class="mail-text">

        <textarea id="content"  class="form-control sysedit" name="content"></textarea>

        <div class="clearfix"></div>
    </div>
    <div class="mail-body text-right">

        <button type="submit" id="send_email"  class="btn btn-sm btn-primary"><i class="fa fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>
    </div>
    <div class="clearfix"></div>



</div>

<table class="table table-bordered table-hover sys_table">
    <thead>
    <tr>


        <th width="80%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>

    </tr>
    </thead>
    <tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['e']->value, 'is');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['is']->value) {
?>
        <tr>


            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['subject'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['is']->value['date'];?>
</td>

        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </tbody>
</table><?php }
}
