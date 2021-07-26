<?php

declare(strict_types=1);

namespace Scraper;

use Scraper\Routing;

final class Web
{
    public function __construct()
    {
        $routing = new Routing();
        $controllerName = 'Scraper\\'.$routing->getController().'Controller';
        $controller = new $controllerName($routing->getParams());
    }
}
