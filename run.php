<?php

require __DIR__ . '/vendor/autoload.php';

use Scraper\Scraper;

$scraper = new Scraper();
echo $scraper->getTotalAds();
