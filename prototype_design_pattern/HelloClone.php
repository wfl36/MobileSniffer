<?php

#克隆不会启动构造方法。
#克隆可以使用构造函数的默认赋值，但是如果构造函数生成一个动作，如一旦实例化就会打印这条信息，克隆并不会显示这个消息
/**
 * author      : wangfenglei
 * createTime  : 2017/9/13 10:08
 * description :
 */
class HelloClone
{
    private $builtInConstructor;
    public function __construct()
    {
        echo "Hello,clone!<br />";
        $this->builtInConstructor = 'Constructor creation<br/>';
    }

    public function doWork()
    {
        echo $this->builtInConstructor;
        echo "I'm doing the work!<p />";
    }
}

//启动构造函数
$original = new HelloClone();
$original->doWork();

//克隆不会启动构造函数
$cloneIt = clone $original;
$cloneIt->doWork();