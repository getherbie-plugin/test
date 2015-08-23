<?php

use Herbie\DI;
use Herbie\Hook;
use herbie\plugin\test\classes\TestExtension;

class TestPlugin
{

    public static function install()
    {
        Hook::attach('twigInitialized', ['TestPlugin', 'addTwigExtension']);
    }

    public static function addTwigExtension($twig)
    {
        $assets = DI::get('Assets');
        $testExtension = new TestExtension($assets);
        $twig->addExtension($testExtension);
    }

    // public function onPluginsInitialized($pluginManager) { }

    // public function onOutputGenerated($null, array $attributes) { }

    // public function onOutputRendered($null, array $attributes) { }

    // public function onPageLoaded($page) { }

    // public function onRenderContent($content, array $attributes) { }

    // public function onContentSegmentRendered($null, array $attributes) { }
}

TestPlugin::install();
