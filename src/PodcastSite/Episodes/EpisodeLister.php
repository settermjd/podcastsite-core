<?php

namespace PodcastSiteCore\Episodes;

use PodcastSiteCore\Episodes\Adapter\EpisodeListerFilesystem;

/**
 * Class EpisodeLister.
 *
 * @author Matthew Setter <matthew@matthewsetter.com>
 * @copyright 2015 Matthew Setter
 */
class EpisodeLister
{
    /**
     * @param array|\Traversable|\Iterator $options
     *
     * @return \PodcastSiteCore\Episodes\Adapter\EpisodeListerFilesystem
     */
    public static function factory($options = [])
    {
        switch ($options['type']) {
            case 'filesystem':
            default:
                return new EpisodeListerFilesystem(
                    $options['path'],
                    $options['parser'],
                    (array_key_exists('cache', $options)) ? $options['cache'] : ''
                );
        }
    }
}
