<?php
/* Smarty version 3.1.32, created on 2019-02-16 05:47:41
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/ide/views/box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c67ea4d9992e7_76495008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b207cdd5856e5754dfdaa87af68575b82c512099' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/ide/views/box.tpl',
      1 => 1550314051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c67ea4d9992e7_76495008 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">

    <div class="col-md-3 ib_profile_width" id="ib_pl_nav">
        <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

    </div>

    <div class="col-md-9">



        <div class="ibox float-e-margins animated fadeIn" id="ib_internal_editor">
            <div class="ibox-title">

                <h5 id="ibox_title">iBilling Editor</h5>

                <div class="ibox-tools">

                    <div class="btn-group" role="group" aria-label="..."><button type="button" class="btn btn-xs btn-black btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-database"></i>  Tools
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">

                            <li><a href="#" data-toggle="modal" data-target="#ib_upload_box" id="ib_file_upload">Upload File</a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ide/file/app_backup/">Backup Application</a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/dbbackup/">Backup Database</a></li>

                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
ide/init/app/" target="_blank">External File Manager</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/dbm.php" target="_blank">External DB Admin</a></li>

                        </ul></div>

                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-xs btn-danger btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-trash"></i>  Delete
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#" id="del_file" data-path="..."><i class="fa fa-file"></i> ...</a></li>
                            <li><a href="#" id="del_folder" data-path="..."><i class="fa fa-folder"></i> ...</a></li>

                        </ul>
                    </div>

                    <div class="btn-group" role="group" aria-label="...">




                        <a href="#" id="ib_add_file" class="btn btn-primary btn-xs" style="box-shadow: none; border-radius: 0;"><i class="fa fa-file"></i> Add File</a>
                        <a href="#" id="ib_add_folder" class="btn btn-danger btn-xs" style="box-shadow: none; border-radius: 0;"><i class="fa fa-folder"></i> Add Folder</a>

                        <a href="#" id="ib_save" class="btn btn-primary btn-xs" style="box-shadow: none; border-radius: 0;"><i class="fa fa-check"></i> Save</a>
                    </div>


                </div>

            </div>
            <div class="ibox-content" id="editor" style="min-height: 800px;"></div>
            <div class="ibox-content" id="other_file"></div>
        </div>







    </div>

</div>

<input type="hidden" id="ib_app_url" name="ib_app_url" value="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">

<!-- Modal -->
<div id="ib_upload_box" class="modal fade" tabindex="-1" data-width="760" style="display: none;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Upload Files</h4>
    </div>
    <div class="modal-body">
        <div class="row">
<div class="col-md-12">
    <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugin_upload/" class="dropzone" id="upload_container">

        <div class="dz-message">
            <h3> <i class="fa fa-cloud-upload"></i>  Drop File Here</h3>
            <br />
            <span class="note">Or Click to Upload</span>
        </div>

    </form>
</div>

        </div>
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

    </div>
</div><?php }
}
