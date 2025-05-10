<?php
namespace strategy\demo1;
use strategy\demo1\StrategyA;
use strategy\demo1\StrategyB;
use strategy\demo1\Context;
class Client
{

    public function doSomething(){
        // todo 真实业务场景：这一步用type 或者 其他方式 决定实例化的类是那个然后传入context用来进行下一步的操作
        $stratrgy = new StrategyB();
//        $stratrgy = new StrategyA();
        $context = new Context();
        $context->context($stratrgy);
        $context->algorithm();
    }
}