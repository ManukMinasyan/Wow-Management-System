<?php

namespace Apiato\Core\Abstracts\Providers;

use Apiato\Core\Loaders\MiddlewaresLoaderTrait;

/**
 * Class MiddlewareProvider
 *
 */
abstract class MiddlewareProvider extends MainProvider
{

    use MiddlewaresLoaderTrait;

    /**
     * @var  array
     */
    protected $middlewares = [];

    /**
     * @var  array
     */
    protected $middlewareGroups = [];

    /**
     * @var  array
     */
    protected $routeMiddleware = [];

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $this->loadMiddlewares();
    }

    /**
     * Register anything in the container.
     */
    public function register()
    {

    }

}
