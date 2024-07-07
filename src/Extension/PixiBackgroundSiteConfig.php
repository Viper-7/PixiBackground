<?php
namespace Viper7\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\CheckboxField;
use TractorCow\SliderField\SliderField;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

class PixiBackgroundSiteConfig extends Extension
{
    private static $db = [
        'DisableBackground' => 'Boolean',
    ];

    private static $has_one = [
    ];

    private static $defaults = [
        'DisableBackground' => false,
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Background', CheckboxField::create('DisableBackground', 'Disable Animated Background'));
    }
}
