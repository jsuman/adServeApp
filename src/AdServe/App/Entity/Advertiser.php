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
    public $name;

    /**
     * Url of the advertiser's homepage
     *
     * @var string
     */
    public $homepage;

    /**
     * price offered by the advertiser
     * @var float
     */
    public $priceOffered;

} 