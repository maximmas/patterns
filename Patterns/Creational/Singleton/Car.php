<?php

class Car
{
    private static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
    }
    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}