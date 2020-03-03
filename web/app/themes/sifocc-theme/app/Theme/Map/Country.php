<?php

namespace Dxw\SifoCCTheme\Theme\Map;

class Country
{
    public function getAllCourtNames(\WP_Post $country) : array
    {
        $courtNames = [];
        $courts = get_field('courts', $country->ID);
        foreach ($courts as $court) {
            $courtNames[] = "<dd>".$court['court_name']."</dd>";
        }
        return $courtNames;
    }
}
