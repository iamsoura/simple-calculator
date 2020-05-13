<?php
require_once 'classes/autoload.php';

use Classes\Calculator as App;

$app = new App('SD Calculator');

echo $app->getAppName();