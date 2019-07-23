<?php
declare(strict_types=1);

namespace ModxCli;

use Symfony\Component\Console\Application;

final class ModxCli extends Application
{
    public const APP_NAME = 'modx-cli';
    public const APP_VERSION = '0.0.0-dev';

    public function __construct()
    {
        parent::__construct(self::APP_NAME, self::APP_VERSION);
    }
}
