<?php 
namespace Classes;

class Calculator
{
    protected $app_name;
    public function __construct($appName)
    {
        $this->app_name = $appName;
    }
    public function getAppName() {
        return $this->app_name;
    }
}
