<?php

 class Single
 {
    public static $instance = null;

    private function __construct()
    {
        echo '调用构造函数标记' . '<br/>';
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getAbc()
    {
        return 'abc';
    }
 }