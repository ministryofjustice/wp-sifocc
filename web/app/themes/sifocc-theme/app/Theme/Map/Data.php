<?php

namespace Dxw\SifoCCTheme\Theme\Map;

class Data
{
    private $map;
    private $region;

    public function __construct(\Dxw\SifoCCTheme\Theme\Map\Map $map, \Dxw\SifoCCTheme\Theme\Map\Region $region)
    {
        $this->map = $map;
        $this->region = $region;
    }

    public function populate()
    {
        $data = [];
        $regions = $this->map->getAllRegions();
        foreach ($regions as $region) {
            $data[$this->region->getRegionId($region)] = [
                'region' => $region->post_title,
                'countries' => $this->region->getAllCountriesWithCourts($region)
            ];
        }
        return $data;
    }
}
