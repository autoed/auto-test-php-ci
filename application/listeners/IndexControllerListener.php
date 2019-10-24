<?php

class IndexControllerListener {

    public function beforeIndexAction($event, $source, $data) {
        echo "beforeIndexAction - $data <br/>";

    }

    public function afterIndexAction($event, $source, $data) {
        echo "afterIndexAction - $data <br/>";

    }
    
}