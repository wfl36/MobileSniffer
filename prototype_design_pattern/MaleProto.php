<?php
/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 11:13
 * description :
 */

include_once('IPrototype.php');

class MaleProto extends IPrototype
{
    const gender = 'MALE';
    public $mated;

    public function __construct()
    {
        $this->eyeColor = 'red';
        $this->wingBeat = '220';
        $this->unitEyes = '760';
    }

    function __clone()
    {
        // TODO: Implement _clone() method.
    }
}