<?php

namespace app\views;

use core\BaseView;

abstract class CommonView extends BaseView {

    protected string $Root = __DIR__ . '/data/';

    public function __construct() {

        parent::__construct();
    }

    private function commonMethod() {
    }

    public function view() {

        require_once $this->Root . 'index.php';
    }
}