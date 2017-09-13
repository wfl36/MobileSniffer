<?php

/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 11:36
 * description :
 */
function __autoload($class_name)
{
    include $class_name.'.php';
}

class Client
{
    //用于直接实例化
    private $fly1;
    private $fly2;
    //用于克隆
    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;

    public function __construct()
    {
        //实例化
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();
        //克隆
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->fly2;

        //更新克隆
        $this->c1Fly->mated = 'true';
        $this->c2Fly->fecundity = 186;
        $this->updatedCloneFly->eyeColor = 'purple';
        $this->updatedCloneFly->wingBeat = '220';
        $this->updatedCloneFly->unitEyes = '750';
        $this->updatedCloneFly->fecundity = '92';
        // 通过类型提示方法发送
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);

    }

    private function showFly(IPrototype $fly)
    {
        echo 'eye color:'.$fly->eyeColor.'<br>';
        echo 'wing beats/second:'.$fly->eyeColor.'<br>';
        echo 'eye units: '.$fly->unitEyes.'<br>';
        $genderNow = $fly::gender;
        echo 'gender: '.$genderNow.'<br>';
        if($genderNow == "FEMALE"){
            echo 'number of eggs: '.$fly->fecundity;
        }else{
            echo 'mated: '.$fly->mated.'<p/>';
        }
    }

}
$worker = new Client();