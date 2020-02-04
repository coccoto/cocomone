<?php

namespace core;

abstract class BaseView {

    protected ? object $html = null;
    protected ? array $pathParameter = null;
    protected ? array $property = null;

    public function __construct() {

        $this->html = new HTML();
    }

    /**
     * @param mixed $value
     */
    public function push(string $key, $value): void {

        $this->property[$key] = $value;
    }

    public function setPathParameter(array $pathParameter): void {

        $this->pathParameter = $pathParameter;
    }
}