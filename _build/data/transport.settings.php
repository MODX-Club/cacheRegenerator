<?php

$settings = array();


$setting_name = PKG_NAME_LOWER.'.regenerate_docs_on_doc_save';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '0',
 'xtype' => 'combo-boolean',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = PKG_NAME_LOWER.'.regenerate_docs_on_site_refresh';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '0',
 'xtype' => 'combo-boolean',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = PKG_NAME_LOWER.'.regenerate_unsearchable_docs';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '1',
 'xtype' => 'combo-boolean',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = PKG_NAME_LOWER.'.exclude_docs_id';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;


$setting_name = PKG_NAME_LOWER.'.exclude_doc_templates_id';
$setting = $modx->newObject('modSystemSetting');
$setting->fromArray(array(
 'key' => $setting_name,
 'value' => '',
 'xtype' => 'textfield',
 'namespace' => NAMESPACE_NAME,
 'area' => 'default',
),'',true,true);

$settings[] = $setting;



unset($setting,$setting_name);
return $settings;