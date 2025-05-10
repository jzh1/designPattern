<?php
namespace strategy\demo1;

use strategy\demo1\StrategyInterface;

/**
 * 上下文类，通过context 控制单元进行调度
 */
class Context{

    //维持一个抽象策略类的引用
    private $strategy;
    private $map;
    public function __construct(){
        // 或者使用map方式实现
        $this->map = [
            'strategyA' => 'strategy\demo1\StrategyA',
            'strategyB' => 'strategy\demo1\StrategyB'
        ];
    }

    public function context(StrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function algorithm(){
        return $this->strategy->algorithm();
    }

}