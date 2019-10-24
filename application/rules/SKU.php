<?php
require_once('Rule.php');

class SKU implements Rule{


    function __construct() {
        echo "SKU newInstance <br/><hr>";
    }

    function init($settings) {
        echo "SKU init <br/>";
    }

    function process($items) {
        echo "SKU process <br/><hr>";
    }
    
}