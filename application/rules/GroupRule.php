<?php

class GroupRule {

    public $settings;

    public function init($settings) {
        echo "Init GroupRule <br/>";
        $this->settings = $settings;

    }

    public function handle($items) {
        echo "Handle GroupRule <br/>";

    } 

}