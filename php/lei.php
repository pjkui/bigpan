<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 16:09
 */
class Test{

    public $a = '这个是公共的';

    protected $b = '这个是保护的';

    private $c = '这个是私有的';

    public function __get($name){
        //var_dump($name);
        echo "there is".$this->$name;
    }

    public function __set($name,$value){
        var_dump($name,$value);
        $this->$name = $value;
    }


}

$obj = new Test;
//获取private修饰的值
$obj->b = "照样设置你";

echo $obj->b;