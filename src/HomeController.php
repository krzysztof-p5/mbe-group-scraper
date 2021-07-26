<?php

declare(strict_types=1);

namespace Scraper;

final class HomeController
{
    public function __construct()
    {
        echo '<h1>Home</h1>';

        echo '<br><br><a href="/offers">Lista ofert &raquo;</a>';
    }
}
