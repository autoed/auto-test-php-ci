<?php

class SkuRule {

    public $settings;

    public function init($settings) {
        echo "Init SkuRule <br/>";
        $this->settings = $settings;

    }

    public function handle($items) {
        echo "Handle SkuRule <br/>";

    } 

}