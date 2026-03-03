<?php

declare(strict_types=1);

namespace {{namespace}}\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Example Facade
 *
 * @package {{namespace}}\Facades
 */
class {{class}} extends Facade
{
    protected static function getFacadeAccessor()
    {
        return '{{class|filename}}';
    }
}
