<?php

declare(strict_types=1);

namespace Scraper;

final class Scraper
{
    public function __construct()
    {
    }

    public static function getAds(int $page)
    {
        $ads = file_get_contents('https://goldmanrecruitment.pl/wp-json/appmanager/v1/ads?page='.$page.'&lang=pl&specialization=&location=');
        if ($ads) {
            $adsArray = json_decode($ads, true);
            return $adsArray;
        }
    }

    public static function getTotalAds()
    {
        $ads = self::getAds(1);
        return $ads['total'];
    }
}
