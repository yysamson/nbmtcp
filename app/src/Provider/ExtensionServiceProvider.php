<?php
/**
 * User: dongww
 * Date: 14-4-4
 * Time: 下午3:00
 */

namespace Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class ExtensionServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['twig']->addExtension(new TwigExtension());
    }

    public function boot(Application $app)
    {
    }
}
 