<?php
/* Smarty version 3.1.32, created on 2019-02-28 12:32:15
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/media/views/settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c781b1fb549d3_49383933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b819975d10e8566f7f8233cb74f5d44e1af25ee3' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/media/views/settings.tpl',
      1 => 1550312981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c781b1fb549d3_49383933 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ibox float-e-margins" id="ui_settings">
    <div class="ibox-title">
        <h5>Media Library Settings</h5>


    </div>
    <div class="ibox-content">
        <table class="table table-hover">
            <tbody>

            <tr>
                <td width="60%"><label for="media_database">Enable Database Storage </label>
                    <br>
                    <p>By enabling this, you will be able to store files in mysql database.</p>
                </td>
                <td><input type="checkbox"         <?php if ($_smarty_tpl->tpl_vars['_c']->value['media_database'] == 'yes') {?>checked<?php }?>                          data-toggle="toggle" data-size="small" data-on="Yes" data-off="No"
                           id="media_database"></td>
            </tr>

            <tr>
                <td width="60%"><label for="media_theme">Theme </label>
                    <br>
                    <p>Set theme for media browser.</p>
                </td>
                <td>
                    <select class="form-control" id="media_theme">
                        <option value="default" <?php if ($_smarty_tpl->tpl_vars['_c']->value['media_theme'] == 'default') {?>selected<?php }?>>Default</option>
                        <option value="win10" <?php if ($_smarty_tpl->tpl_vars['_c']->value['media_theme'] == 'win10') {?>selected<?php }?>>Windows 10</option>

                    </select>
                </td>
            </tr>




            </tbody>
        </table>

        <hr>


        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
media/init/app/">Media Library</a>
    </div>
</div><?php }
}
