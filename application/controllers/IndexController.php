<?php

namespace Icinga\Module\Testmodule\Controllers;

use Icinga\Web\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $versionFile = dirname(dirname(dirname(__FILE__))) . '/VERSION';
        $this->view->version = trim((string) @file_get_contents($versionFile)) ?: 'unknown';
    }
}
