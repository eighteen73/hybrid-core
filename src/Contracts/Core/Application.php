<?php
/**
 * Application contract.
 *
 * The Application class should be the be the primary class for working with and
 * launching the app. It extends the `Container` contract.
 *
 * @package   HybridCore
 * @link      https://github.com/themehybrid/hybrid-core
 *
 * @author    Theme Hybrid
 * @copyright Copyright (c) 2008 - 2023, Theme Hybrid
 * @license   https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Contracts\Core;

use Hybrid\Contracts\Container\Container;

/**
 * Application interface.
 *
 * @since  5.0.0
 *
 * @access public
 */
interface Application extends Container {

    /**
     * Adds a service provider. Developers can pass in an object or a fully-
     * qualified class name.
     *
     * @since  5.0.0
     * @param  string|object $provider
     * @return void
     *
     * @access public
     */
    public function provider( $provider );

    /**
     * Adds a static proxy alias. Developers must pass in fully-qualified
     * class name and alias class name.
     *
     * @since  5.0.0
     * @param  string $class_name
     * @param  string $alias
     * @return void
     *
     * @access public
     */
    public function proxy( $class_name, $alias );

}
