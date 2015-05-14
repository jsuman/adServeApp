<?php
namespace AdServe\App\ServiceImplementation;

/**
 * @author Suman
 */

class AdvertiserNameOrderedPublisherService extends PublisherService
{
    /**
     * This method returns the list of publisher sorted according to the advertiser's name.
     * @param $cityId
     * @return array
     */
  public function getPublishersInCity($cityId)
  {
      $publishers = parent::getPublishersInCity($cityId);
      $sortedPublishers = $this->sortPublishersByAdvertiserName($publishers);

      return $sortedPublishers;

  }

    /**
     * Sorts the publisher according to the Advertiser's name
     * @param $listOfPublishers
     */
    private function sortPublishersByAdvertiserName($listOfPublishers)
    {
        usort( $listOfPublishers, array($this, 'sortByAdvertiserName'));
        return $listOfPublishers;
    }
    private function sortByAdvertiserName($a, $b)
    {

        return strcasecmp($a->advertisers[0]->name,$b->advertisers[0]->name);

    }
}