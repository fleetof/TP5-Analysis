<?php
/**
 * 注册树模式
 */
class Register
{
    /**
     * 对象树
     */
    protected static $objects = [];

    /**
     * 注册树
     */
    public static function set($key, $object)
    {
        self::$objects[$key] = $object;
    }

    /**
     * 获取树
     * 如果不存在则new一个
     */
    public static function get($key)
    {
        if (!isset(self::$objects[$key]))
        {
            self::$objects[$key] = new $key;
        }
        return self::$objects[$key];
    }

    /**
     * 取消注册树
     */
    public static function unregister($key)
    {
        unset(self::$objects[$key]);
    }
}


/*==================================*/
class A
{
    public static function getA()
    {
        echo 'a';
    }
}