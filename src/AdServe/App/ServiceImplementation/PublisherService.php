<?php

namespace AdServe\App\ServiceImplementation;

use AdServe\App\Service\DataServiceInterface;
use AdServe\App\Service\PublisherServiceInterface;

/**
 * @author Suman
 */
abstract class PublisherService implements PublisherServiceInterface
{

    private $dataService;
    private $publishers = [];

    /**
     * @param DataServiceInterface $dataService
     */
    public function __construct(DataServiceInterface $dataService) {
        $this->dataService = $dataService;
    }

    /**
     * This method returns the publishers in the same order as it is in the JSON file
     * and is overridden by the concrete class to provide different ordering of publishers.
     * @param $cityId
     * @return array
     */
    public function getPublishersInCity($cityId)
    {
        $this->publishers = $this->dataService->getDataForCity($cityId);
        return $this->publishers;
    }
} 