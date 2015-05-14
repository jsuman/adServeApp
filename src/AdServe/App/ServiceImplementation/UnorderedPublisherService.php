<?php
namespace AdServe\App\ServiceImplementation;

/**
 * @author Suman
 */
class UnorderedPublisherService extends PublisherService
{
    /**
     * returns unordered list of publishers
     * @param $cityId
     * @return array
     */
  public function getPublishersInCity($cityId)
  {
      return parent::getPublishersInCity($cityId);
  }
}