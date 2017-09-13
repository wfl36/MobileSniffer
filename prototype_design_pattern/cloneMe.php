<?php

/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 9:46
 * description :
 */
abstract class cloneMe
{
    public $name;
    public $picture;
    abstract function __clone();

}

class Person extends cloneMe
{
    public function __construct()
    {
        $this->picture = 'cloneMan.png';
        $this->name = 'Original';
    }

    public function disply()
    {
        echo "<img src = '$this->picture'>";
        echo "<br />$this->name<p />";
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

$worker = new Person();
$worker->disply();

$slacker = clone $worker;
$slacker->name = 'cloned';
$slacker->disply();