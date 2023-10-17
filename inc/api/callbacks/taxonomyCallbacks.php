<?php

/**
 * @package ccPlugin
 */

namespace inc\api\callbacks;

use inc\core\baseController;

class taxonomyCallbacks extends baseController
{
    public function adminDashboard() {
        return require_once("$this->plugin_path/templates/taxonomy.php");
    }
}
