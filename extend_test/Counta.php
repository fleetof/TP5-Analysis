<?php
/**
 * 内置类Countable的使用
 */
class Counta implements Countable
{
    public function count()
    {
        return 123;
    }
}