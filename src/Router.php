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
 * @version   0.1.2
 * @link      https://github.com/akufenstudio/orchestra-skeleton
 */

namespace App;

/**
 * Router
 *
 * @package App
 * @uses \Phalcon\Mvc\Router\Group
 */
class Router extends \Phalcon\Mvc\Router\Group
{
    /**
     * Initialise the routing group
     *
     * @return void
     */
    public function initialize()
    {
        // Basic configuration
        $this->setPaths(array(
            'module' => 'app',
            'controller' => 'index',
            'namespace' => 'App\Controllers'
        ));

        // Default route
        $this->add('/404', array(
            'controller' => 'error',
            'action' => 'show404'
        ));
    }
}
