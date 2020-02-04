<?php

namespace app\controllers;

use core\BaseController;

abstract class CommonController extends BaseController {

    public function __construct(array $pathParameter) {

        parent::__construct($pathParameter);

        $this->commonMethod();
    }

    private function commonMethod() {

        $this->viewInstance->push('title', 'cocomone');
    }
}