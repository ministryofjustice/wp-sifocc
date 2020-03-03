<?php 

namespace Dxw\SifoCCTheme\Theme\Map;

class Script implements \Dxw\Iguana\Registerable
{
    private $data;
    
    public function __construct(\Dxw\SifoCCTheme\Theme\Map\Data $data)
    {
        $this->data = $data;
    }
    
    public function register()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueAndLocalizeScript']);
    }
    
    public function enqueueAndLocalizeScript()
    {
        wp_enqueue_script('map', $this->getAssetPath('js/map.min.js'), ['main']);
        $data = $this->data->populate();
        wp_localize_script('map', 'mapData', $data);
    }
    
    private function getAssetPath($path)
    {
        return dirname(get_template_directory_uri()).'/dist/'.$path;
    }
}
