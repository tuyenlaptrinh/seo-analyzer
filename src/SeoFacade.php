<?php

namespace Tuyenlaptrinh\SeoAnalyzer;

use Illuminate\Support\Facades\Facade;


class SeoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'seo-analyzer';
    }
}
