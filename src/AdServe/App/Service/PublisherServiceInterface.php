<?php
namespace AdServe\App\Service;

/**
 * @author Suman
 */
interface PublisherServiceInterface
{
    /**
     * this method returns the list of publishers whose ordering depends on the concrete implementation
     * @param $cityId
     * @return mixed
     */
    public function getPublishersInCity($cityId);

} 