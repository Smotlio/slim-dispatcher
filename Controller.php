<?php

namespace Sj;

use Slim\Slim;

Class Controller extends Slim {

    protected $data;

    public function __construct() {

        $settings = require("../app/config/settings.php");
        if(isset($settings['model'])) {
            $this->data = $settings['model'];
        }
        parent::__construct($settings);
    }

    public function render($name, $data = array(), $status = null) {

        if(strpos($name, ".php") === false) {
            $name = $name . ".php";
        }
        parent::render($name, $data, $status);
    }
}
