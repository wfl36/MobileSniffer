<?php
/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 10:58
 * description :
 */
abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;
    abstract function __clone();
}

