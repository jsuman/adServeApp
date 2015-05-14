<?php

namespace AdServe\App\ServiceImplementation;

use AdServe\App\Service\PublisherServiceInterface;

/**
 * This class is responsible for displaying list of publishers whose ordering depends on the
 * concrete implementation of PublisherService injected through constructor.
 * @author Suman
 */
class PublisherPrinter
{
    private $pubService;
    private $publishers = [];

    /**
     *
     * @param PublisherServiceInterface $pubService
     */
    function __construct(PublisherServiceInterface $pubService)
    {
        $this->pubService = $pubService;
    }

    public function getPublishers($cityId)
    {
        $this->publishers = $this->pubService->getPublishersInCity($cityId);
        return $this->publishers;
    }

} 