<?php 

namespace Dxw\SifoCCTheme\Theme\Map;

class Map
{
    public function getAllRegions() : array
    {
        return get_posts([
            'posts_per_page' => -1,
            'post_type' => 'regions'
        ]);
    }
}
