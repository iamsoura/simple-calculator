<?php
require_once 'classes/autoload.php';

use Classes\Calculator as App;

$app = new App('SD Calculator');

echo $app->getAppName();

echo '<br />';

$input = 10;

echo 'Adding +1 with number '.$input.' = '. $app->addition($input);