<?php

namespace AdServe\App\ServiceImplementation;
/**
 * @author Suman
 */
class PriceOfferedOrderedPublisherService extends PublisherService
{
    /**
     * This method is responsible for sorting the publishers according to the price (highest first) offered by advertisers.
     * @param $cityId
     * @return array
     */
    public function getPublishersInCity($cityId)
    {
        $publishers = parent::getPublishersInCity($cityId);
        $sortedPublishers = $this->sortPublishersByPriceOffered($publishers);

        return $sortedPublishers;

    }

    private function  sortPublishersByPriceOffered($publishers)
    {
        usort( $publishers, array($this, 'sortByPriceOffered'));
        return $publishers;

    }

    private function  sortByPriceOffered($a, $b)
    {
        $firstPrice = $a->advertisers[0]->priceOffered;
        $secondPrice = $b->advertisers[0]->priceOffered;
       return $firstPrice === $secondPrice ? 0 : ($firstPrice < $secondPrice)? 1 : -1;
    }

} 