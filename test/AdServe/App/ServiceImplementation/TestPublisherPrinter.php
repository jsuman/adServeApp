<?php


namespace AdServe\App\ServiceImplementation;

class TestPublisherPrinter extends \PHPUnit_Framework_TestCase
{
    public function testGetPublishersInCity()
    {
        /*checks if the publisher is ordered according to the sorted advertiser's name.*/
        $serviceAdvertiserNameOrdered = new PublisherPrinter(new AdvertiserNameOrderedPublisherService(new DataService()));
        $publishersSorted = $serviceAdvertiserNameOrdered->getPublishers(2358);
        $this->assertEquals($publishersSorted[0]->name,"Glacier Perk");

        /*checks if the publishers list are same (unordered) as in JSON file.*/
        $serviceUnordered = new PublisherPrinter(new UnorderedPublisherService(new DataService()));
        $publishersUnsortedByName = $serviceUnordered->getPublishers(2358);
        $this->assertEquals($publishersUnsortedByName[0]->name, "Gorkha Restaurant");

        /*checks if the publishers are ordered according to the price offered by advertisers.*/
        $priceOrdered = new PublisherPrinter(new PriceOfferedOrderedPublisherService(new DataService()));
        $publishersSortedByPrice = $priceOrdered->getPublishers(2358);
        $this->assertEquals($publishersSortedByPrice[0]->name, "Glacier Perk");
    }
}
 