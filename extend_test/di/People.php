<?php
/**
 * 依赖注入示范(Dependency Injection，简称DI)
 */

namespace di;

class People
{
    public static function eat($object)
    {
        return $object::getName();
    }
}