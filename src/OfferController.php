<?php

declare(strict_types=1);

namespace Scraper;

use Scraper\Scraper;

final class OfferController
{
    public function __construct($params)
    {
        echo '<h1>Oferta pracy</h1>';
        //die($params['page'] .' - '.$params['offerId']);
        $scraper = new Scraper();
        
        $oferty = $scraper->getAds($params['page']);
        $found = false;
        if (isset($oferty['ads'])) {
            foreach ($oferty['ads'] as $ad) {
                if ($ad['id'] == $params['offerId']) {
                    $found = true;
                    echo '<h4>'.$ad['title'].'</h4>nr ref.: '.$ad['id'].'<h5>'.$ad['intro'].'</h5>'.$ad['description'].'<br><br><a href="'.$ad['url'].'">Aplikuj &raquo</a><br><br>';
                    break;
                }
            }

            if (!$found) {
                echo 'Nie znaleziono oferty';
            }
        }

        echo '<br><br><a href="/offers">&laquo Powrót</a>';
    }
}
