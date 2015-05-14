<?php
namespace AdServe\App\Util;

class TestDataSourceHandler extends \PHPUnit_Framework_TestCase {

    /*checks if the corresponding JSON file exists or not*/
    public function testGetCityData()
    {
        $cityData = DataSourceHandler::getInstance()->getCityData(2358);
         $this->assertEquals($cityData["id"],2358);
        $cityData = DataSourceHandler::getInstance()->getCityData("2222222");
        $this->assertEquals($cityData, null);
    }
}
 