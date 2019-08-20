<?php
/* Smarty version 3.1.32, created on 2019-02-16 05:49:28
  from '/Users/razib/Documents/valet/ibc/ibilling/apps/ide/views/app.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c67eab82f1779_36459792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faf7b91b8844c37a1c23f022e628f9e72c8e87c6' => 
    array (
      0 => '/Users/razib/Documents/valet/ibc/ibilling/apps/ide/views/app.tpl',
      1 => 1550313686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c67eab82f1779_36459792 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en" data-ng-app="FileManagerApp">
<head>
    <!--
      * Angular FileManager v1.5.1 (https://github.com/joni2back/angular-filemanager)
      * Jonas Sciangula Street <joni2back@gmail.com>
      * Licensed under MIT (https://github.com/joni2back/angular-filemanager/blob/master/LICENSE)
    -->
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
</title>
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
application/storage/icon/favicon.ico" type="image/x-icon" />

    <!-- third party -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/lib/angular/angular.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/lib/angular/angular-translate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/views/js/ng-file-upload.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_theme']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/views/css/paper.min.css" />



    <!-- Comment if you need to use raw source code -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/lib/angular/filemanager.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
apps/ide/lib/angular/filemanager.min.js"><?php echo '</script'; ?>
>
    <!-- /Comment if you need to use raw source code -->

    <?php echo '<script'; ?>
 type="text/javascript">
        //example to override angular-filemanager default config
        angular.module('FileManagerApp').config(['fileManagerConfigProvider', function (config) {
            var defaults = config.$get();
            config.set({
                appName: 'IDE File Manager',
                pickCallback: function(item) {
                    var msg = 'Picked %s "%s" for external use'
                            .replace('%s', item.type)
                            .replace('%s', item.fullPath());
                    window.alert(msg);
                },

                allowedActions: angular.extend(defaults.allowedActions, {
                    pickFiles: false,
                    pickFolders: false,
                }),
            });
        }]);
    <?php echo '</script'; ?>
>
</head>

<body class="ng-cloak">
<angular-filemanager></angular-filemanager>
</body>
</html>
<?php }
}
