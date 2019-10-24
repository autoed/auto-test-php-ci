<?php

class OtherIndexControllerListener {

    public function beforeIndexAction($event, $source, $data) {
        echo "beforeIndexAction(other) - $data <br/>";

    }

    public function afterIndexAction($event, $source, $data) {
        echo "afterIndexAction(other) - $data <br/>";

    }
    
}