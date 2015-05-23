<?php

namespace AdServe\App\Entity;

/**
 * @author Suman
 */
class Publisher
{
    /**
     * Name of the publisher.
     *
     * @var string
     */
    private $name;

    /**
     * Street address of the publisher.
     *
     * @var string
     */
    private $adr;

    /**
     * web url of the publisher.
     * @var string
     */

    private $url;

    /**
     * Unsorted list of publisher.
     *
     * @var Advertiser[]
     */
    private $advertisers = [];

} 