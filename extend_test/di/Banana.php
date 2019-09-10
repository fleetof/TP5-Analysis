<?php
namespace di;
class Banana
{
    public $a = 1;
    private $b = 1;
    public static $c = null;

    public static function getName()
    {
        return 'Banana';
    }

    /**
     * 测试类的反射扩展
     * @param $param
     * @return string
     */
    public function testReflection($param)
    {
        return 'hello world';
    }

    /**
     * 测试类的反射扩展
     * @param $param
     * @return string
     */
    public function testReflection_1($type = 'hello world')
    {
        return $type;
    }

}