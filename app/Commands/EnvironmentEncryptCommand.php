<?php

namespace App\Commands;

use Illuminate\Support\Facades\App;

class EnvironmentEncryptCommand extends \Illuminate\Foundation\Console\EnvironmentEncryptCommand
{
    public function handle()
    {
        App::setBasePath(getcwd());

        return parent::handle();
    }
}
