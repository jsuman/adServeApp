<?php
namespace AdServe\App\Entity;

/**
 * @author Suman
 */
class Advertiser
{
    /**
     * Name of the advertiser
     * @var string
     */
    private $name;

    /**
     * Url of the advertiser's homepage
     *
     * @var string
     */
    private $homepage;

    /**
     * price offered by the advertiser
     * @var float
     */
    private $priceOffered;

} 