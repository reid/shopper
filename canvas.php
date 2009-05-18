<?php

echo file_get_contents('index.html');

if (array_key_exists('q', $_REQUEST)) {
    echo <<<EOJS
IRShopper.setQuery("{$_REQUEST['q']}");
EOJS;
}
