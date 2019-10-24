<?php

class CondimentRule {

    public $settings;

    public function init($settings) {
        echo "Init CondimentRule <br/>";
        $this->settings = $settings;

    }

    public function handle($items) {
        echo "Handle CondimentRule <br/>";

    } 

}