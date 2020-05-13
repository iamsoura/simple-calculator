<?php
require_once 'classes/autoload.php';

use Classes\Calculator as App;

$app = new App('SD Calculator');

echo $app->getAppName();

echo '<br />';

$input = 50;

echo 'Adding +10 with number '.$input.' = '. $app->addition($input);