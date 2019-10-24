<?php
require_once('Rule.php');

class Condiment implements Rule{

    function init($settings) {
        echo "Condiment init <br/>";
    }

    function process($items) {
        echo "Condiment process <br/><hr>";
    }
}