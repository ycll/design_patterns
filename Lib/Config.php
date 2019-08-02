<?php
namespace Lib;

class Config implements \ArrayAccess
{
    /** @var $path string 配置路径 */
    protected $path;
    /** @var $configs array 加载的详细配置 */
    protected $configs;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function offsetExists($offset)
    {
    }

    public function offsetGet($offset)
    {
        if (empty($this->configs[$offset])) {
            $configPath = $this->path . '/' . $offset . '.php';
            $config = require $configPath;
            $this->configs[$offset] = $config;
        }

        return $this->configs;
    }

    public function offsetSet($offset, $value)
    {
    }

    public function offsetUnset($offset)
    {
    }
}