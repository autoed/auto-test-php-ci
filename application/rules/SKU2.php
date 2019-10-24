<?php
require_once('Rule.php');

class SKU2 implements Rule{


    function __construct() {
        echo "SKU2 newInstance <br/><hr>";
    }

    function init($settings) {
        echo "SKU2 init <br/>";
    }

    function process($items) {
        echo "SKU2 process <br/><hr>";
    }
    
}