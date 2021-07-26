<?php

declare(strict_types=1);

namespace Scraper;

final class Routing
{
    private $controller = 'Home';
    private $params = [];

    public function __construct()
    {
        $url = explode('/', $_SERVER['REQUEST_URI']);
        $url = array_filter($url);

        if (is_array($url) && count($url) > 0) {
            switch ($url[1]) {
                case 'offers':
                    $this->controller = 'Offers';
                    break;
                case 'offer':
                    if ($url[2] != '') {
                        $params = explode('-', $url[2]);
                        if (is_array($params) && count($params) == 2) {
                            $params[0] = (int) $params[0];
                            $params[1] = (int) $params[1];
                            if (is_int($params[0]) &&  is_int($params[1])) {
                                $this->controller = 'Offer';
                                $this->params['page'] = $params[0];
                                $this->params['offerId'] = $params[1];
                            }
                        }
                    }
                    break;

                default:
                    $this->controller = 'NotFound';
                    break;
            }
        }
    }

    /**
     * Get the value of controller.
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Get the value of params.
     */
    public function getParams()
    {
        return $this->params;
    }
}
