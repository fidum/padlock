<?php

use Illuminate\Console\Application as Artisan;

it('registers commands', function () {
    expect($this->app->make(Artisan::class, ['version' => 'x'])->all())->toHaveKeys([
        'env:encrypt',
        'env:decrypt',
    ]);
});
