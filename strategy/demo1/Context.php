<?php
namespace strategy\demo1;

use strategy\demo1\StrategyInterface;

/**
 * 上下文类，通过context 控制单元进行调度
 */
class Context{

    //维持一个抽象策略类的引用
    private  $strategy;
    public function __construct(){
    }

    public function context(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function algorithm(){
        return $this->strategy->algorithm();
    }

}