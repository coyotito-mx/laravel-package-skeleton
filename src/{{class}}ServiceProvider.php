<?php

declare(strict_types=1);

namespace {{namespace}};

use Illuminate\Support\ServiceProvider;

class {{class}}ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('{{class|filename}}', fn () => new {{class}}());
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
