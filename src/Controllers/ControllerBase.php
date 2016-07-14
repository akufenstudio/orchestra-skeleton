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

namespace App\Controllers;

/**
 * App\Controllers\ControllerBase
 *
 * A basic controller for the application.
 *
 * @package Controllers
 * @uses \Akufen\Orchestra\Mvc\Controller
 */
class ControllerBase extends \Akufen\Orchestra\Mvc\Controller
{
    /**
     * Initialize basic controller functionalities
     *
     * @return void
     */
    protected function initialize()
    {
        // Initialize parent controller
        parent::initialize();
    }
}
