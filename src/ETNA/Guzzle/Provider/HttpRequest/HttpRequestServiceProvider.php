<?php

namespace ETNA\Silex\Provider\HttpRequest;

use GuzzleHttp\Client as Client;
use Silex\Application;
use Silex\ServiceProviderInterface;

class HttpRequestServiceProvider implements ServiceProviderInterface
{
    public function boot(Application $app)
    {

    }

    public function register(Application $app)
    {
        $app["http"] = $app->share(
            function () {
                return new Client();
            }
        );
    }
}
