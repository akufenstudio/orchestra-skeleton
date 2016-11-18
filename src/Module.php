<?php

/**
 * Orchestra: A minimalist object-oriented superset for WordPress using Phalcon.
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE and is available through
 * the world-wide-web at the following URI:
 * http://opensource.org/licenses/MIT
 *
 * @copyright Akufen Atelier Creatif
 * @author    Nicholas Charbonneau <nicholas@akufen.ca>
 * @license   http://opensource.org/licenses/MIT
 * @version   0.1.3
 * @link      https://github.com/akufenstudio/orchestra-skeleton
 */

namespace App;

/**
 * Module
 *
 * @package App
 * @uses \Phalcon\Mvc\ModuleDefinitionInterface
 */
class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
    /**
     * Register the module's autoloader.
     *
     * @return void
     */
    public function registerAutoloaders(\Phalcon\DiInterface $di = null)
    {
        // Auto-loaders configuration
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            'App' => __DIR__
        ));

        // Register auto-loaders
        $loader->register();
    }

    /**
     * Register the module's services.
     *
     * @param \Phalcon\DI\FactoryDefault $di The dependency injector.
     * @return void
     */
    public function registerServices(\Phalcon\DiInterface $di)
    {
        $config = $di->getConfig();

        // View configuration
        $di->set('view', function() use($di, $config) {

            // Create default view and attach custom events
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir(__DIR__ . $config->application->viewsDir);

            return $view;

        });
    }
}
