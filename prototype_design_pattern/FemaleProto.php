<?php
/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 11:19
 * description :
 */
include_once('IPrototype.php');
class FemaleProto extends IPrototype
{
    const gender = "FEMALE";
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }

    function __clone()
     {
        // TODO: Implement __clone() method.
    }
}