<?php
//this script will run only in demo mode

if($_app_stage != 'Demo'){
    exit;
}

/*

ALTER TABLE `crm_groups` ADD `created_at` DATETIME NULL DEFAULT NULL AFTER `c5`, ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `created_at`;

ALTER TABLE `sys_users` ADD `created_at` DATETIME NULL DEFAULT NULL AFTER `c5`, ADD `updated_at` DATETIME NULL DEFAULT NULL AFTER `created_at`;

ALTER TABLE `crm_accounts` CHANGE `fname` `fname` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `crm_accounts` CHANGE `lname` `lname` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `crm_accounts` CHANGE `company` `company` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `crm_accounts` CHANGE `jobtitle` `jobtitle` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `crm_accounts` CHANGE `cid` `cid` INT(11) NULL DEFAULT NULL;

ALTER TABLE `crm_accounts` CHANGE `phone` `phone` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL, CHANGE `email` `email` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `address` `address` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `city` `city` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `state` `state` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `zip` `zip` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `country` `country` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `balance` `balance` DECIMAL(16,2) NULL, CHANGE `tags` `tags` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `password` `password` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `token` `token` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `ts` `ts` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `img` `img` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `web` `web` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `facebook` `facebook` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `google` `google` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `linkedin` `linkedin` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `crm_accounts` CHANGE `notes` `notes` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `sys_accounts` ADD `created_at` TIMESTAMP NULL DEFAULT NULL AFTER `status`, ADD `updated_at` TIMESTAMP NULL DEFAULT NULL AFTER `created_at`;

ALTER TABLE `sys_accounts` CHANGE `description` `description` VARCHAR(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

ALTER TABLE `sys_transactions` CHANGE `aid` `aid` INT(11) NULL DEFAULT NULL;


 */

$action = route(1);

switch ($action){

    case 'admin':
        // auto login to admin


        Ib_Internal::autoLogin('demo@example.com','123456');


        break;

    case 'client':

        Ib_Internal::autoLogin('customer@example.com','123456','customer');

        break;


    case 'reset':

        Demo::reset();
        r2(U.'dashboard');


        break;

    case 'create':


        Demo::reset();
        Demo::makeReady('us');



        $cron = route(2);

        if($cron == '1'){
            exit;
        }
        else{
            r2(U.'dashboard');
        }




        break;

}

