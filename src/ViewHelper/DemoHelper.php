<?php

namespace App\ViewHelper;

use NyroDev\PhpTemplateBundle\Helper\HelperInterface;

class DemoHelper implements HelperInterface {

    protected $charset;

    public static function getAlias()
    {
        return 'demo';
    }

    public function getName()
    {
        return self::getAlias();
    }

    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    public function getCharset(): string
    {
        return $this->charset ?? 'utf-8';
    }

    public function demo() {
        return 'Demo 123';
    }

}