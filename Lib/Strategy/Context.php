<?php
namespace Lib\Strategy;

class Context
{
    protected $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function todo() {
        $this->strategy->todo();
    }
}
