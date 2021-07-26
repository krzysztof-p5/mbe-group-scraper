<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Scraper\Scraper;

final class ScraperTest extends TestCase
{
    public function testTotalNUmberIsIntGratherThanZero()
    {
        $this->assertThat(Scraper::getTotalAds(), $this->logicalAnd(
            $this->isType('int'), 
            $this->greaterThan(0)
        ));
    }
}