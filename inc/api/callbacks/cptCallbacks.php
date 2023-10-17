<?php

/**
 * @package ccPlugin
 */

namespace inc\api\callbacks;

use inc\core\baseController;

class cptCallbacks extends baseController
{
    public function adminDashboard() {
        return require_once("$this->plugin_path/templates/cpt.php");
    }
}
