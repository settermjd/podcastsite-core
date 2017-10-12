<?php

namespace PodcastSiteCore\Feed;

/**
 * Interface FeedCreatorInterface.
 *
 * @author Matthew Setter <matthew@matthewsetter.com>
 * @copyright 2015 Matthew Setter
 */
interface FeedCreatorInterface
{
    /**
     * Generate a feed file from one or more Episode objects.
     *
     * @param \PodcastSiteCore\Entity\Show      $show        Contains information about the show itself
     * @param \PodcastSiteCore\Entity\Episode[] $episodeList A list of Episode objects
     *
     * @return string
     */
    public function generateFeed(\PodcastSiteCore\Entity\Show $show, $episodeList = []);
}
