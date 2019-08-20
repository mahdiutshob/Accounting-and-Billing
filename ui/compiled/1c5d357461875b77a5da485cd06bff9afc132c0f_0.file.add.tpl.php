<?php
/* Smarty version 3.1.32, created on 2018-10-01 04:37:27
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/notes/views/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bb1dcc7ecd9a2_62426277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c5d357461875b77a5da485cd06bff9afc132c0f' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/notes/views/add.tpl',
      1 => 1479230526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb1dcc7ecd9a2_62426277 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">

    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-body">

                <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/init/add_post/" method="post">

                    <div class="form-group"><label class="col-lg-2 control-label">Title </label>

                        <div class="col-lg-10"><input type="text" name="title" class="form-control">

                        </div>
                    </div>


                    <div class="form-group"><label class="col-lg-2 control-label">Contents </label>

                        <div class="col-lg-10">

                            <textarea class="form-control" name="contents" rows="15"></textarea>

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-primary" type="submit" id="submit"><i
                                        class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


</div><?php }
}
