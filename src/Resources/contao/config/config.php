<?php

// Frontend modules
$GLOBALS['FE_MOD']['miscellaneous']['helloWorld'] = 'rallo88\ContaoHelloWorldBundle\Module\HelloWorldModule';
$GLOBALS['TL_HOOKS']['addCustomRegexp'][] = array('ContaoHelloWorldBundle', 'KennwortCheck');
