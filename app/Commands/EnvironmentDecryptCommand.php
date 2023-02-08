<?php

namespace App\Commands;

use Illuminate\Support\Facades\App;

class EnvironmentDecryptCommand extends \Illuminate\Foundation\Console\EnvironmentDecryptCommand
{
    public function handle()
    {
        App::setBasePath(getcwd());

        return parent::handle();
    }
}
