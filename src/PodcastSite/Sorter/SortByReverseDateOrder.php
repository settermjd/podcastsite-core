<?php

namespace PodcastSiteCore\Sorter;

use PodcastSiteCore\Entity\Episode;

/**
 * A simple invokable class to help sort a list of episodes.
 *
 * Class SortByReverseDateOrder
 *
 * @author Matthew Setter <matthew@matthewsetter.com>
 * @copyright 2015 Matthew Setter
 */
class SortByReverseDateOrder
{
    /**
     * Sort the entries in reverse date order.
     *
     * @param \PodcastSiteCore\Entity\Episode $a
     * @param \PodcastSiteCore\Entity\Episode $b
     *
     * @return int
     */
    public function __invoke(Episode $a, Episode $b)
    {
        $firstDate = new \DateTime($a->getPublishDate());
        $secondDate = new \DateTime($b->getPublishDate());

        if ($firstDate == $secondDate) {
            return 0;
        }

        return ($firstDate > $secondDate) ? -1 : 1;
    }
}
