<?php

namespace App\Commands;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class EnvironmentDecryptCommand extends \Illuminate\Foundation\Console\EnvironmentDecryptCommand
{
    public function handle()
    {
        App::setBasePath(getcwd());

        return parent::handle();
    }
}
