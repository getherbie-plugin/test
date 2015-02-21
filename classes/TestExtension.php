<?php

namespace herbie\plugin\test\classes;

class TestExtension extends \Twig_Extension
{
    /**
     * @var Assets
     */
    protected $assets;

    /**
     * @param Assets $app
     */
    public function __construct($assets)
    {
        $this->assets = $assets;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'test';
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        $options = ['is_safe' => ['html']];
        return [
            new \Twig_SimpleFunction('test', function () {
                $this->assets->addCss('@plugin/test/assets/test.css');
                echo "TEST.";
            }, $options),
        ];
    }
}
