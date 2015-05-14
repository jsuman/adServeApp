<?php
namespace AdServe\App\ServiceImplementation;


class TestPriceOfferedOrderedPublisherService extends \PHPUnit_Framework_TestCase
{
    /*checks if the publishers are ordered according to the price offered by advertisers.*/
    public function testGetPublishersInCity()
    {
        $priceOrderedPublisherService = new PriceOfferedOrderedPublisherService(new DataService());
        $publisher = $priceOrderedPublisherService->getPublishersInCity(2358);
        $this->assertEquals($publisher[0]->name, "Glacier Perk");
    }

} 