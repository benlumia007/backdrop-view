<?php
/**
 * View template tags.
 *
 * Template functions related to views.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2021, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Backdrop\View;

use Backdrop\View\Contracts\Engine;
use Backdrop\Proxies\App;

if ( ! function_exists( __NAMESPACE__ . '\\view' ) ) {
    /**
     * Returns a view object.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @return View
     */
    function view( $name, $slugs = [] ) {
        return App::resolve( Engine::class )->view( $name, $slugs );
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\display' ) ) {
    /**
     * Outputs a view template.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @return void
     */
    function display( $name, $slugs = [] ) {
        view( $name, $slugs )->display();
    }
}

if ( ! function_exists( __NAMESPACE__ . '\\render' ) ) {
    /**
     * Returns a view template as a string.
     *
     * @since  1.0.0
     * @access public
     * @param  string            $name
     * @param  array|string      $slugs
     * @return string
     */
    function render( $name, $slugs = [] ) {
        return view( $name, $slugs  )->render();
    }
}