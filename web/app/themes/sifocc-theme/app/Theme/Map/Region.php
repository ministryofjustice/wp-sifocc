<?php

namespace Dxw\SifoCCTheme\Theme\Map;

class Region
{
    private $country;

    public function __construct(\Dxw\SifoCCTheme\Theme\Map\Country $country)
    {
        $this->country = $country;
    }

    public function getAllCountriesWithCourts(\WP_Post $region) : array
    {
        $countriesWithCourts = [];
        $countries = $this->getAllCountries($region);
        foreach ($countries as $country) {
            $courtNames = $this->country->getAllCourtNames($country);
            if ($courtNames != []) {
                $countriesWithCourts[$country->post_title] = $courtNames;
            }
        }
        return $countriesWithCourts;
    }

    private function getAllCountries(\WP_Post $region) : array
    {
        return get_posts([
            'post_type' => 'members',
            'posts_per_page' => -1,
            'meta_key' => 'region',
            'meta_value' => $region->ID
        ]);
    }

    public function getRegionId(\WP_Post $region) : string
    {
        return get_field('region_id', $region->ID);
    }
}
