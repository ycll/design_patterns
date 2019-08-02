<?php
namespace Lib\Observer;

class ConcreteObserver implements Observer
{
    public function update()
    {
       echo '观察者1';
    }
}