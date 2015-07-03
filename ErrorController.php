<?php

namespace Sj;

Class ErrorController extends Controller {

    public function error(){

        $status = 404;
        $msg = 'The route you were looking for could not be found!';

        $this->render('error', array('error' => $status, 'msg' => $msg), $status);
    }

}