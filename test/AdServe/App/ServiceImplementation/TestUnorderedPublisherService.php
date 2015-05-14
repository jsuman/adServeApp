<?php
namespace AdServe\App\ServiceImplementation;

class TestUnorderedPublisherService extends \PHPUnit_Framework_TestCase
{

    /*checks if the publishers list are same (unordered) as in JSON file.*/
    public function testGetPublishersInCity()
    {
        $unorderedService = new UnorderedPublisherService(new DataService());
        $publishers = $unorderedService->getPublishersInCity(2358);
        $this->assertEquals($publishers[0]->name,"Gorkha Restaurant");
    }
} 