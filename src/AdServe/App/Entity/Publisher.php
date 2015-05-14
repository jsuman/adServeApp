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
    public $name;

    /**
     * Street address of the publisher.
     *
     * @var string
     */
    public $adr;

    /**
     * web url of the publisher.
     * @var string
     */

    public $url;

    /**
     * Unsorted list of publisher.
     *
     * @var Advertiser[]
     */
    public $advertisers = [];

} 