<?php

/**
 * This file is part of Herbie.
 *
 * (c) Thomas Breuss <www.tebe.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace herbie\plugin\test;

use herbie\plugin\test\classes\TestExtension;
use Herbie;

class TestPlugin extends Herbie\Plugin
{

    public function onTwigInitialized($twig)
    {
        $assets = $this->getService('Assets');
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
