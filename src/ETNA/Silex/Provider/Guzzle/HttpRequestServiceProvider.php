<?php

namespace ETNA\Silex\Provider\Guzzle;

use GuzzleHttp\Client as Client;
use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * HttpRequestService Provider.
 * Permet de faire des requêtes http via $app['http']
 */

class HttpRequestServiceProvider implements ServiceProviderInterface
{
    /**
    * @inherit
    * {@inherit}
    * {@inheritdoc}
    */
    public function boot(Application $app) { }

    /**
    * @inherit
    * {@inherit}
    * {@inheritdoc}
    */
    public function register(Application $app)
    {
        $app["http"] = $app->share(
            function () {
                return new Client();
            }
        );
    }
}
