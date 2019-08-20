<?php
/* Smarty version 3.1.32, created on 2018-05-03 05:20:43
  from '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/companies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aead46b5a53d1_37687333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86cc9a6c564e9a880e44caa6d0c1c19f7848a3be' => 
    array (
      0 => '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/companies.tpl',
      1 => 1492161522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_5aead46b5a53d1_37687333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">



    <div class="col-md-12">



        <div class="panel panel-default">
            <div class="panel-body">

                <a href="#" class="btn btn-primary add_company waves-effect waves-light" id="add_company"><i class="fa fa-plus"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Company'];?>
</a>


            </div>

        </div>
    </div>



</div>

<div class="row">



    <div class="col-md-12">



        <div class="panel panel-default">

            <div class="panel-body">



                <div class="table-responsive" id="ib_data_table">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Logo'];?>
</th>
                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Company Name'];?>
</th>
                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Email'];?>
</th>
                            <th class="bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Phone'];?>
</th>
                            <th class="text-center bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['companies']->value, 'company');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['company']->value) {
?>
                            <tr data-id="<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
">
                                <td>

                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['logo_url'] != '') {?>
                                        <img style="max-height: 40px;" src="<?php echo $_smarty_tpl->tpl_vars['company']->value['logo_url'];?>
">
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/ui/theme/ibilling/img/default_company.png">
                                    <?php }?>

                                </td>
                                <td> <a class="cview" id="ae<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['company']->value['company_name'];?>
</a>
                                </td>
                                <td><a href="#" class="send_email"><?php echo $_smarty_tpl->tpl_vars['company']->value['email'];?>
</a> </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['company']->value['phone'];?>
</td>
                                <td class="text-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
" id="be<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" class="btn btn-inverse btn-xs cedit" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
"><i class="fa fa-pencil"></i> </a>


                                    <a href="#" class="btn btn-danger btn-xs cdelete" id="c<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fa fa-trash"></i> </a>
                                </td>

                            </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>






                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>



</div>

<div class="md-fab-wrapper">
    <a class="md-fab md-fab-primary waves-effect waves-light add_company" href="#">
        <i class="fa fa-plus"></i>
    </a>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
