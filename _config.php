<?php
use SilverStripe\View\Requirements;
use SilverStripe\SiteConfig\SiteConfig;


$vars = [
    'InitialDirt' => SiteConfig::current_site_config()->InitialDirt,
    'DirtyRate' => SiteConfig::current_site_config()->DirtyRate,
    'CharacterSize' => SiteConfig::current_site_config()->CharacterSize,
    'CharacterSpeed' => SiteConfig::current_site_config()->CharacterSpeed,
];

if(SiteConfig::current_site_config()->SpriteID) {
    $vars['Sprite'] = SiteConfig::current_site_config()->Sprite()->getAbsoluteURL();
} else {
    $vars['Sprite'] = null;
}

if(!SiteConfig::current_site_config()->DisableBackground) {
    Requirements::javascript('viper-7/pixibackground:dist/js/pixi.min.js');
    Requirements::javascriptTemplate('viper-7/pixibackground:dist/js/pixi_background.js', $vars);
}