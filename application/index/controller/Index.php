<?php
namespace app\index\controller;

use ali\Pay;
use Reflection;
use Register;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function test()
    {
        halt(getenv());
        return Pay::index();
    }

    //单例模式测试
    public function singleTest()
    {
        $abc = \Single::getInstance()->getAbc();
        \Single::getInstance()->getAbc();
        \Single::getInstance()->getAbc();
        \Single::getInstance()->getAbc();
        echo $abc;
    }

    //注册树测试
    public function registerTreeTest()
    {
        Register::set('ali_pay', 'ali\Pay');
        //Register::unregister('ali_pay');
        //Register::get('ali_pay')::index();
        Register::get('A')->getA();     //调用一个未注册的类
    }

    //依赖注入测试
    public function dependencyInjectionTest()
    {
        $fruit = new \di\Apple();
        return \di\People::eat($fruit);
    }

    //反射测试
    public function reflectionTest()
    {
        $banana = new \di\Banana;
        //var_dump($banana);
        $reflecObj = new \ReflectionClass($banana);
        //var_dump($reflecObj);
        //输出整个反射类信息
        //\ReflectionClass::export('\di\Banana');
        $methods = $reflecObj->getMethods();
        
        foreach ($methods as $method) {
            //如果要返回类的文档可以使用类直接调用该方法
            var_dump($method->getDocComment());
        }
        //获取属性
        var_dump($reflecObj->getProperties());
    }

    //测试Countable
    public function countTest()
    {
        $countObj = new \Counta();
        //echo $countObj->index();
        echo count($countObj);
    }

    public function facadeTest()
    {
        $config = \Config::get('app.');
        var_dump($config);
    }
}
