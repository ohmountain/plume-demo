<?php

require_once(__DIR__.'/../vendor/autoload.php');

use Plume\Plume;

$app = new Plume();

$app->env(Plume::ENV_DEV);

$app->run();

?>
