<?php
$pkgName = 'cacheRegenerator';
$pkgNameLower = strtolower($pkgName);

# ini_set("display_errors", 1);

if ($object->xpdo) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $modx =& $object->xpdo;
            $modelPath = $modx->getOption("{$pkgNameLower}.core_path",null,$modx->getOption('core_path')."components/{$pkgNameLower}/").'model/';
            $modx->addPackage($pkgName,$modelPath);
            
            $manager = $modx->getManager();
            $modx->setLogLevel(modX::LOG_LEVEL_ERROR);
            
            // adding xpdo objects
            # $manager->createObjectContainer('');
            
            $modx->setLogLevel(modX::LOG_LEVEL_INFO);
        
            break;
    }
}
return true;