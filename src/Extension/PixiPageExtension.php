<?php
namespace Viper7\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;
use SilverStripe\SiteConfig\SiteConfig;

class PixiPageExtension extends Extension {
    public function onAfterInit() {
        if(!SiteConfig::current_site_config()->hasField('DisableBackground') || !SiteConfig::current_site_config()->DisableBackground) {
            Requirements::javascript('viper-7/silverstripe-animation-:dist/js/pixi.min.js');
            Requirements::javascriptTemplate('viper-7/silverstripe-animation-:dist/js/pixi_background.js', ['SiteConfig' => SiteConfig::current_site_config()]);
        }
    }
}
