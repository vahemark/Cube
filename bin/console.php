#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application();
$app->addCommands(
    [
        new \Cube\Command\ScrambleCommand(),
        new \Cube\Command\PlayCommand(),
    ]
);

$app -> run();