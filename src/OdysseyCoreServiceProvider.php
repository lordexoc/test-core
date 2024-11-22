<?php

namespace Odyssey\TestCore;

use Illuminate\Support\ServiceProvider;

class OdysseyCoreServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');

        $this->publishes([
            __DIR__ . '/config/odyssey-core.php' => config_path('odyssey-core.php'),
        ], 'config');
    }

    public function register() {
        return 'naptiy';
    }
}
