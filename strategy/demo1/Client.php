<?php
namespace strategy\demo1;
use strategy\demo1\StrategyA;
use strategy\demo1\StrategyB;
use strategy\demo1\Context;
class Client
{

    public function doSomething(){
        $stratrgy = new StrategyB();
//        $stratrgy = new StrategyA();
        $context = new Context();
        $context->context($stratrgy);
        $context->algorithm();
    }
}