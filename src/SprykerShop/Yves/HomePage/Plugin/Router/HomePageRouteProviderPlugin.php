<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\HomePage\Plugin\Router;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class HomePageRouteProviderPlugin extends \Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin
{
    public const ROUTE_HOME = 'home';

    /**
     * @param \Spryker\Shared\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Shared\Router\Route\RouteCollection
     */
    public function addRoutes(\Spryker\Shared\Router\Route\RouteCollection $routeCollection): \Spryker\Shared\Router\Route\RouteCollection
    {
        $routeCollection = $this->addHomeRoute($routeCollection);
        return $routeCollection;
    }

    /**
     * @param \Spryker\Shared\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Shared\Router\Route\RouteCollection
     */
    protected function addHomeRoute(\Spryker\Shared\Router\Route\RouteCollection $routeCollection): \Spryker\Shared\Router\Route\RouteCollection
    {
        $route = $this->buildRoute('/', 'HomePage', 'Index', 'indexAction');
        $routeCollection->add(static::ROUTE_HOME, $route);
        return $routeCollection;
    }
}
