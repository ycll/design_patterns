<?php
namespace Lib\Observer;

class ObserverManager
{
    private $observers;

    /**
     * @param mixed $observer
     */
    public function setObservers($observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * 通知观察者执行
     */
    public function notity() {
        /** @var  $observer Observer */
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
