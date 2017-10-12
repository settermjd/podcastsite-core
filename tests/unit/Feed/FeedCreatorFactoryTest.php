<?php

use PodcastSiteCore\Feed\FeedCreatorFactory;

/**
 * Class FeedCreatorFactoryTest
 *
 * @coversDefaultClass \PodcastSiteCore\Feed\FeedCreatorFactory
 */
class FeedCreatorFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
    }

    protected function tearDown()
    {
    }

    /**
     * @covers ::factory
     */
    public function testCanInstantiateTheCorrectFeedObject()
    {
        $feedTypes = ['rss', 'atom', 'itunes'];

        foreach ($feedTypes as $type) {
            $this->assertInstanceOf(
                '\PodcastSiteCore\Feed\iTunesFeedCreator',
                FeedCreatorFactory::factory($type),
                'Incorrect feed generator object instantiated'
            );
        }
    }
}
