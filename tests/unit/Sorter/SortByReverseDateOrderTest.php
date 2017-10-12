<?php

use PodcastSiteCore\{
    Entity\Episode,
    Sorter\SortByReverseDateOrder
};

/**
 * Class SortByReverseDateOrderTest
 *
 * @coversDefaultClass \PodcastSiteCore\Sorter\SortByReverseDateOrder
 */
class SortByReverseDateOrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__invoke
     */
    public function testResultsAreSortedInTheCorrectOrder()
    {
        $episodeListing = [
            new Episode([
                'publishDate' => '2013-01-01'
            ]),
            new Episode([
                'publishDate' => '2015-01-01'
            ]),
            new Episode([
                'publishDate' => '2014-01-01'
            ]),
        ];

        // Sort the records in reverse date order
        $sorter = new SortByReverseDateOrder();
        usort($episodeListing, $sorter);

        /** @var Episode $episode */
        $episode = array_shift($episodeListing);
        $this->assertEquals('2015-01-01', $episode->getPublishDate());
        $episode = array_shift($episodeListing);
        $this->assertEquals('2014-01-01', $episode->getPublishDate());
        $episode = array_shift($episodeListing);
        $this->assertEquals('2013-01-01', $episode->getPublishDate());
    }
}
