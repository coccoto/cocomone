<?php

namespace core;

final class HTML {

    private array $style = [];
    private array $script = [];

    public function setStyle(string $path): void {

        $this->style[] = glob('styles/' . $path . '.css');
    }

    public function setScript(string $path): void {

        $this->script[] = glob('scripts/' . $path . '.js');
    }

    public function useStyle(): void {

        foreach ($this->style as $files) {
            foreach ($files as $path) {
                echo "<link rel='stylesheet' href='/$path'>";
            }
        }
    }

    public function useScript(): void {

        foreach ($this->script as $files) {
            foreach ($files as $path) {
                echo "<script src='/$path' defer></script>";
            }
        }
    }
}