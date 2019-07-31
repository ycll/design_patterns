<?php
namespace Lib;

class AutoLoader
{
    /**
     * @param $class
     */
    static function autoLoader($class):void
    {
        require_once BASEDIR . str_replace('\\', '/', $class) . '.php';
    }
}