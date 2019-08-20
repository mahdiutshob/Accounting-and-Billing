<?php
/* Smarty version 3.1.32, created on 2018-05-03 06:15:17
  from '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/sections/footer_default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aeae135a8d630_12517346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b620ef31aac9356730221cff90e5e10751c8a31e' => 
    array (
      0 => '/Users/razib/Dropbox/valet/ibc/ibilling/ui/theme/ibilling/sections/footer_default.tpl',
      1 => 1525342513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeae135a8d630_12517346 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax-modal" class="modal container fade-scale" tabindex="-1" style="display: none;"></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['tpl_footer']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['_c']->value['hide_footer']) {?>

        <?php } else { ?>
        <div class="footer">
            <div>
                <strong><?php echo $_smarty_tpl->tpl_vars['_L']->value['Copyright'];?>
</strong> &copy; <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>

            </div>
        </div>
    <?php }
}?>

</div>

<div id="right-sidebar">
    <div class="sidebar-container">

        <ul class="nav nav-tabs navs-3">

            <li class="active"><a data-toggle="tab" href="#tab-1">
                    <?php echo $_smarty_tpl->tpl_vars['_L']->value['Notes'];?>

                </a></li>
                                                            <li class=""><a data-toggle="tab" href="#tab-3">
                    <i class="fa fa-gear"></i>
                </a></li>
        </ul>

        <div class="tab-content">


            <div id="tab-1" class="tab-pane active">

                <div class="sidebar-title">
                    <h3> <i class="fa fa-file-text-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Quick Notes'];?>
</h3>

                </div>

                <div style="padding: 10px">

                    <form class="form-horizontal push-10-t push-10" method="post" onsubmit="return false;">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="form-material floating">
                                    <textarea class="form-control" id="ib_admin_notes" name="ib_admin_notes" rows="10"><?php echo $_smarty_tpl->tpl_vars['user']->value->notes;?>
</textarea>
                                    <label for="ib_admin_notes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Whats on your mind'];?>
</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <button class="btn btn-sm btn-success" type="submit" id="ib_admin_notes_save"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                            </div>
                        </div>
                    </form>
                    </div>




            </div>

            
                                                                        
                                                                                                                                                                    
                                                                                                                                                                                            
                
            
            <div id="tab-3" class="tab-pane">

                <div class="sidebar-title">
                    <h3><i class="fa fa-gears"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Settings'];?>
</h3>

                </div>

                <div class="setings-item">
                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Theme_Color'];?>
</h4>

                    <ul id="ib_theme_color" class="ib_theme_color">

                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/set_color/light/"><span class="light"></span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/set_color/blue/"><span class="blue"></span></a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/set_color/dark/"><span class="dark"></span></a></li>
                    </ul>


                </div>
                <div class="setings-item">
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Fold Sidebar Default'];?>

                    </span>
                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="r_fold_sidebar" <?php if (get_option('mininav') == '1') {?>checked<?php }?> class="onoffswitch-checkbox" id="r_fold_sidebar">
                            <label class="onoffswitch-label" for="r_fold_sidebar">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>



</div>

</div>
</section>
<!-- BEGIN PRELOADER -->
<?php if (($_smarty_tpl->tpl_vars['_c']->value['animate']) == '1') {?>
    <div class="loader-overlay">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
<?php }?>
<input type="hidden" id="_url" name="_url" value="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
">
<input type="hidden" id="_df" name="_df" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['df'];?>
">
<input type="hidden" id="_lan" name="_lan" value="<?php echo $_smarty_tpl->tpl_vars['_c']->value['language'];?>
">
<!-- END PRELOADER -->
<!-- Mainly scripts -->


<?php echo '<script'; ?>
>
    var _L = [];


    var app_url = '<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
';
    var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';

    <?php if (($_smarty_tpl->tpl_vars['_c']->value['animate']) == '1') {?>
    var config_animate = 'Yes';
    <?php } else { ?>
    var config_animate = 'No';
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['jsvar']->value;?>

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
ui/lib/ibilling.js"><?php echo '</script'; ?>
>



<?php if (isset($_smarty_tpl->tpl_vars['xfooter']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

<?php }
echo '<script'; ?>
>
    jQuery(document).ready(function() {
        // initiate layout and plugins

        matForms();



        <?php if (isset($_smarty_tpl->tpl_vars['xjq']->value)) {?>
        <?php echo $_smarty_tpl->tpl_vars['xjq']->value;?>

        <?php }?>

    });

<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
