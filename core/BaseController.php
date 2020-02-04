<?php

namespace core;

abstract class BaseController {

    protected ? array $pathParameter = null;
    protected ? object $viewInstance = null;

    public function __construct(array $pathParameter) {

        $this->setPathParameter($pathParameter);
        $this->viewInstance->setPathParameter($pathParameter);
    }

    public function setPathParameter(array $pathParameter): void {

        $this->pathParameter = $pathParameter;
    }
}