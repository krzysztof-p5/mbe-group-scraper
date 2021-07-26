<?php

declare(strict_types=1);

namespace Scraper;

use Scraper\Scraper;

final class OffersController
{
    public function __construct()
    {
        echo '<h1>Oferty pracy</h1>';
        echo '<ol>';
        $scraper = new Scraper();
        for ($i=1;$i<=10;$i++) {
            $oferty = $scraper->getAds($i);
            
            if (isset($oferty['ads'])) {
                foreach ($oferty['ads'] as $ad) {
                    echo '<li><h4>'.$ad['title'].'</h4>nr ref.: '.$ad['id'].'<h5>'.$ad['intro'].'</h5>'.$ad['description'].'<br><br><a href="/offer/'.$i.'-'.$ad['id'].'">Szczegóły &raquo</a><br><br>';
                    /*echo '<pre>';
                    print_r($ad);
                    echo '</pre>';*/
                }
            }
        }
        echo '</ol>';
    }
}
