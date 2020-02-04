<?php

namespace app\controllers;

use app\models as models;
use app\views as views;

final class IndexController extends CommonController {

    public function __construct(array $pathParameter) {

        $this->viewInstance = new views\IndexView($pathParameter);

        parent::__construct($pathParameter);
    }

    public function indexMethod() {

        $this->viewInstance->view();
    }
}