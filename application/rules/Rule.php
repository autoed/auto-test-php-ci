<?php

interface Rule {
    public function init($settings) ;
    public function process($items);
}
