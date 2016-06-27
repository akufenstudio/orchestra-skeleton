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
 * @version   0.1.0
 * @link      https://github.com/akufenstudio/orchestra-skeleton
 */

namespace App\Controllers;

/**
 * App\Controllers\IndexController
 *
 * The error controller for the application.
 *
 * @package Controllers
 * @uses \App\Controllers\ControllerBase
 */
class ErrorController extends ControllerBase
{
    public function show404Action()
    {
        // Send back a 404
        $this->response->setStatusCode(404, 'Page not found.');
        $this->response->send();
    }
}
