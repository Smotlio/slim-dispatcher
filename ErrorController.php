<?php

namespace Sj;

use Slim\Slim;

Class ErrorController extends Controller {

    public function index(){

        $this->render('error', array(), 404);
    }

}