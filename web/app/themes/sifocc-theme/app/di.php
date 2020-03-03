<?php

$registrar->addInstance(\Dxw\Iguana\Theme\Helpers::class, new \Dxw\Iguana\Theme\Helpers());
$registrar->addInstance(\Dxw\Iguana\Theme\LayoutRegister::class, new \Dxw\Iguana\Theme\LayoutRegister(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));
$registrar->addInstance(\Dxw\Iguana\Extras\UseAtom::class, new \Dxw\Iguana\Extras\UseAtom());

// Theme behaviour, media, assets and template tags
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Scripts::class, new \Dxw\SifoccTheme\Theme\Scripts(
    $registrar->getInstance(\Dxw\Iguana\Theme\Helpers::class)
));

$registrar->addInstance(\Dxw\SifoccTheme\Theme\Analytics::class, new \Dxw\SifoccTheme\Theme\Analytics());

//Map
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Map\Country::class, new \Dxw\SifoccTheme\Theme\Map\Country());
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Map\Region::class, new \Dxw\SifoccTheme\Theme\Map\Region(
    $registrar->getInstance(\Dxw\SifoccTheme\Theme\Map\Country::class)
));
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Map\Map::class, new \Dxw\SifoccTheme\Theme\Map\Map());
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Map\Data::class, new \Dxw\SifoccTheme\Theme\Map\Data(
    $registrar->getInstance(\Dxw\SifoccTheme\Theme\Map\Map::class),
    $registrar->getInstance(\Dxw\SifoccTheme\Theme\Map\Region::class)
));
$registrar->addInstance(\Dxw\SifoccTheme\Theme\Map\Script::class, new \Dxw\SifoccTheme\Theme\Map\Script(
    $registrar->getInstance(\Dxw\SifoccTheme\Theme\Map\Data::class)
));