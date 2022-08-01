<?php
namespace Jonexyz\Bt2magnet\Core;

// 单例
class Base
{
    // 存储当前对象
    private static $instance  = [];

    private function __construct()
    {
    }

    private function __clone()
    {

    }

    /**
     * @return $this
     */
    public static function getInstance()
    {
        if(empty(static::$instance[static::class])){
            static::$instance[static::class] = new static();
        }
        return static::$instance[static::class];
    }
}