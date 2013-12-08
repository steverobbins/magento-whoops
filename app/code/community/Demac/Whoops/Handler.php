<?php

    require_once(MAGENTO_ROOT.'/lib/Whoops/Run.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Exception/ErrorException.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Exception/Inspector.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Exception/FrameIterator.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Exception/Frame.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Handler/HandlerInterface.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Handler/Handler.php');
    require_once(MAGENTO_ROOT.'/lib/Whoops/Handler/PrettyPageHandler.php');

    // Remove developer Mode default behavior
    ini_set('error_reporting', '-1');
    ini_set('display_errors', 'Off');
    ini_set('display_startup_errors', 'On');

    // Instantiate and register the new handler
    $run = new Whoops\Run;
    $handler = new Whoops\Handler\PrettyPageHandler;
    $handler->setResourcesPath(MAGENTO_ROOT . '/lib/Whoops/Resources/');

    $run->pushHandler($handler);
    $run->register();