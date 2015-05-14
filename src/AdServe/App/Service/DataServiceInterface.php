<?php
namespace AdServe\App\Service;
/**
 * @author Suman
 */
interface DataServiceInterface
{

    /**
     * This method read the resultset from the datasource ( in our case JSON file)
     * and pass the values from the file into the corresponding classes from the Entity namespace
     * @param $cityId
     * @return \AdServe\App\Entity\Publishers[]
     */
    public function getDataForCity($cityId);

} 