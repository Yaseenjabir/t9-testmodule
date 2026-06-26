<?php

namespace Icinga\Module\Testmodule\Controllers;

use Icinga\Web\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $root = dirname(dirname(dirname(__FILE__)));
        $this->view->version  = trim((string) @file_get_contents($root . '/VERSION')) ?: 'unknown';
        $featFile = $root . '/FEATURES';
        $this->view->features = is_file($featFile)
            ? array_values(array_filter(array_map('trim', file($featFile))))
            : [];
    }
}
