#!/usr/bin/env php
<?php declare(strict_types=1);

$file = dirname(__DIR__) . '/vendor/autoload.php';
if (file_exists($file)) {
    require $file;
} else if (!class_exists(ModxCli\ModxCli::class, false)) {
    throw new Exception('Autoloader not found! Please run composer install.');
}

$application = new ModxCli\ModxCli('modx-cli', '0.0.0-dev.0');
$application->run();
