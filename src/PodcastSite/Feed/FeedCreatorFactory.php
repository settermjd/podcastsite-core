<?php

namespace PodcastSiteCore\Feed;

/**
 * Class FeedCreatorFactory.
 *
 * @author Matthew Setter <matthew@matthewsetter.com>
 * @copyright 2015 Matthew Setter
 */
class FeedCreatorFactory
{
    private function __construct()
    {
    }

    /**
     * @param string $feedType
     *
     * @return \PodcastSiteCore\Feed\FeedCreatorInterface
     */
    public static function factory($feedType)
    {
        switch (strtolower($feedType)) {
            case 'itunes':
            default:
                return new iTunesFeedCreator();
        }
    }
}
