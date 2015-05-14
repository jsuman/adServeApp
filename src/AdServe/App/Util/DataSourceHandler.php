<?php
namespace AdServe\App\Util;

/**
 * DataSourceHandler is a singleton class that handles json file handling.
 *
 * @author suman
 */
class DataSourceHandler {


    private $cache = null; //caching json data to prevent repetitive file access

    /**
     * Singleton method
     *
     * @return DataSourceHandler
     */
    public static function getInstance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new DataSourceHandler();
        }
        return $instance;
    }


    private function __construct()
    {
        $this->cache = [];
    }

    /**
     * prevents cloning of the Singleton instance
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * Returns the City data in json format
     * This method will cache the city data after reading from the file, in order to minimize the repetitive file access.
     * @param $cityId
     * @return array
     */
    public function  getCityData($cityId)
    {
        if(empty($this->cache[$cityId]))
        {
            if(file_exists(DATA_SOURCE_PATH."/".$cityId.".json"))
            {
                //read from file is file exist
                $content = file_get_contents(DATA_SOURCE_PATH."/".$cityId.".json");
                $jsonContent = json_decode($content, TRUE);
                $this->cache[$cityId] =  $jsonContent;//cache the content
                return $this->cache[$cityId];
            }
            else
            {
                //return null if file doesn't exist
                return null;
            }

        }
        // return from cache
        return $this->cache[$cityId];

    }

}
