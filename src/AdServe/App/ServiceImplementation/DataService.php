<?php
namespace AdServe\App\ServiceImplementation;

use AdServe\App\Entity\Advertiser;
use AdServe\App\Entity\Publisher;
use AdServe\App\Service\DataServiceInterface;
use AdServe\App\Util\DataSourceHandler;

/**
 * @author Suman
 */
class DataService implements DataServiceInterface {

    /**
     * This method read the resultset from the datasource ( in our case JSON file)
     * and pass the values from the file into the corresponding classes from the Entity namespace
     * @param $cityId
     * @return \AdServe\App\Entity\Publishers[]
     */

    public function getDataForCity($cityId)
    {
        $cityData = DataSourceHandler::getInstance()->getCityData($cityId);
        $publishers = [];
        foreach ($cityData[FIELD_PUBLISHERS] as $key => $value)
        {
            $publishersJson = $value;
            $publisher = new Publisher();
            $publisher->name = $publishersJson[FIELD_NAME];
            $publisher->advertisers = $this->getAdvertisers($publishersJson);
            $publisher->adr = $publishersJson[FIELD_ADDRESS];
            $publisher->url = $publishersJson[FIELD_URL];
            array_push($publishers,$publisher);
        }
        return $publishers;

    }

    private function getAdvertisers($publishersJson)
    {
        $advertisers = [];

        foreach ($publishersJson[FIELD_ADVERTISERS] as $key => $value) {
            $advertiser = new Advertiser();
            $advertiser->name = $value[FIELD_NAME];
            $advertiser->homepage = $value[FIELD_URL];
            $advertiser->priceOffered = $value[FIELD_PRICE_OFFERED];
            array_push($advertisers, $advertiser);
        }
        return $advertisers;
    }
}