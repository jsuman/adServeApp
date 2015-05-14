<?php

namespace AdServe\App\ServiceImplementation;

class TestAdvertiserNameOrderedPublisherService extends \PHPUnit_Framework_TestCase
{
    /*checks if the publisher is ordered according to the sorted advertiser's name.*/
    public function testGetPublishersInCity()
    {
        $advertiserNameOrderedPublisherService = new AdvertiserNameOrderedPublisherService(new DataService());
        $publisher = $advertiserNameOrderedPublisherService->getPublishersInCity(2358);
        $this->assertEquals($publisher[0]->name, "Glacier Perk");
    }

}
 