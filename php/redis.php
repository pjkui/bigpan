<?php

   /**
    * Redis
    *
    * author  吴钧泽
    *
    * blog   https://wujunze.com
    */


     /**
      链接一个redis实例
      return 链接成功返回TRUE 否则返回 false
     */
    $redis = new Redis();
    $result = $redis->connect('127.0.0.1',6379);
    if($result){
      echo "redis conn is success";
    }else{
        echo "redis conn is fail";
    }
   echo '<hr>';
   /**
   设置key和value的值及读取设置的key和value
   */ 
    $result = $redis->set('test',"hello word redis");  
    var_dump($result).'<br>';    //结果：bool(true)  
    $result = $redis->get('test');  
    var_dump($result).'<br>';   //结果：string(16) "hello word redis"  
    $redis->delete('test');//将redis存入内存的键test删除
    $result = $redis->get('test'); //由于内存中已近删除，所以结果 boolean false
    var_dump($result).'<br>';

    /**
     redis 判断键是否存在
    */
     $seting = $redis->set("demo",'redis key exists ?');
     var_dump($seting).'<br>'; //boolean true
     $exists = $redis->exists('demo');
     var_dump($exists).'<br>'; //boolean true

     /**
     decr

    描述：数字递减存储键值。
    参数：key value：将被添加到键的值
    返回值：INT the new value
    incr
    描述：数字递减存储键值。
    参数：key value：将被添加到键的值
    返回值：INT the new value
     */

     $redis->set('test',"100");  
     var_dump($redis->incr("test")).'<br>';;  //结果：int(101)  
     var_dump($redis->incr("test")).'<br>';;  //结果：int(102) 

     $redis->set('test1',"10");
     var_dump($redis->decr("test1")).'<br>';;  //结果：int(9)  
     var_dump($redis->decr("test1")).'<br>';;  //结果：int(8)

  /**
    getMultiple

    描述：取得所有指定键的值。如果一个或多个键不存在，该数组中该键的值为假
    参数：其中包含键值的列表数组
    返回值：返回包含所有键的值的数组
  */
    $arr = array('136502993','zhuwawa');
    $int = 100;
    $string = 'my love....';
    $redis->set('demo2',$arr);
    $redis->set('demo3',$int);
    $redis->set('demo4',$string);

    $result1 = $redis->getMultiple(array('demo2','demo3','demo4'));
    echo '<pre>';
    var_dump($result1).'<br>';
   /**
       lpush
    将一个或多个值 value 插入到列表 key 的表头


    描述：由列表头部添加字符串值。如果不存在该键则创建该列表。如果该键存在，而且不是一个列表，返回FALSE。
    参数：key,value
    返回值：成功返回数组长度，失败false
    */
    $redis->delete('test');  
    var_dump($redis->lpush("test","111")).'<br>';   //结果：int(1)  
    var_dump($redis->lpush("test","222")).'<br>';   //结果：int(2) 
    /**
    rpush

    描述：由列表尾部添加字符串值。如果不存在该键则创建该列表。如果该键存在，而且不是一个列表，返回FALSE。
    参数：key,value
    返回值：成功返回数组长度，失败false
    */
    $redis->delete('test');  
    var_dump($redis->lpush("test","111")).'<br>';  //结果：int(1)  
    var_dump($redis->lpush("test","222")).'<br>';   //结果：int(2)  
    var_dump($redis->rpush("test","333")).'<br>';   //结果：int(3)  
    var_dump($redis->rpush("test","444")).'<br>';   //结果：int(4)

    /**
    lpop

    描述：返回和移除列表的第一个元素
    参数：key
    返回值：成功返回第一个元素的值 ，失败返回false
    */
    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    $redis->rpush("test","333");  
    $redis->rpush("test","444");  
    var_dump($redis->lpop("test")).'<br>';  //结果：string(3) "222"  

    /**
    rpop

    描述：返回和移除列表的最后一个元素
    参数：key
    返回值：成功返回最后一个元素的值 ，失败返回false
    */

    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    $redis->rpush("test","333");  
    $redis->rpush("test","444");  
    var_dump($redis->rpop("test")).'<br>';  //结果：string(3) "444"  
   
   /**
       lsize,llen

    描述：返回的列表的长度。如果列表不存在或为空，该命令返回0。如果该键不是列表，该命令返回FALSE。
    参数：Key
    返回值：成功返回数组长度，失败false
   */
    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    $redis->rpush("test","333");  
    $redis->rpush("test","444");  
    var_dump($redis->lsize("test")).'<br>'; //结果：int(4) 
   
   /**
    lget

    描述：返回指定键存储在列表中指定的元素。 0第一个元素，1第二个… -1最后一个元素，-2的倒数第二…错误的索引或键不指向列表则返回FALSE。
    参数：key index
    返回值：成功返回指定元素的值，失败false
   */

    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    $redis->rpush("test","333");  
    $redis->rpush("test","444");  
    var_dump($redis->lget("test",3)).'<br>';  //结果：string(3) "444"  
    
    /**
    lset

    描述：为列表指定的索引赋新的值,若不存在该索引返回false.
    参数：key index value
    返回值：成功返回true,失败false
    */

    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    var_dump($redis->lget("test",1)).'<br>';  //结果：string(3) "111"  
    var_dump($redis->lset("test",1,"333")).'<br>';  //结果：bool(true)  
    var_dump($redis->lget("test",1)).'<br>';  //结果：string(3) "333"


       /**
    lgetrange

    描述：
    返回在该区域中的指定键列表中开始到结束存储的指定元素，lGetRange(key, start, end)。0第一个元素，1第二个元素… -1最后一个元素，-2的倒数第二…
    参数：key start end
    返回值：成功返回查找的值，失败false
       */

    $redis->delete('test');  
    $redis->lpush("test","111");  
    $redis->lpush("test","222");  
    print_r($redis->lgetrange("test",0,-1));  //结果：Array ( [0] => 222 [1] => 111 ) 


       /**
    lremove

    描述：从列表中从头部开始移除count个匹配的值。如果count为零，所有匹配的元素都被删除。如果count是负数，内容从尾部开始删除。
    参数：key count value
    返回值：成功返回删除的个数，失败false
       */

    $redis->delete('test');  
    $redis->lpush('test','a');  
    $redis->lpush('test','b');  
    $redis->lpush('test','c');  
    $redis->rpush('test','a');  
    print_r($redis->lgetrange('test', 0, -1)); //结果：Array ( [0] => c [1] => b [2] => a [3] => a )  
    var_dump($redis->lremove('test','a',2));   //结果：int(2)  
    print_r($redis->lgetrange('test', 0, -1)); //结果：Array ( [0] => c [1] => b ) 


    /**
    sadd

    描述：为一个Key添加一个值。如果这个值已经在这个Key中，则返回FALSE。
    参数：key value
    返回值：成功返回true,失败false

    */
    $redis->delete('test');  
    var_dump($redis->sadd('test','111'));   //结果：bool(true)  
    var_dump($redis->sadd('test','333'));   //结果：bool(true)  
    print_r($redis->sort('test')); //结果：Array ( [0] => 111 [1] => 333 )

       /**

    sremove

    描述：删除Key中指定的value值
    参数：key member
    返回值：true or false
       */
    $redis->delete('test');  
    $redis->sadd('test','111');  
    $redis->sadd('test','333');  
    $redis->sremove('test','111');  
    print_r($redis->sort('test'));    //结果：Array ( [0] => 333 )  


    /**

    smove

    描述：将Key1中的value移动到Key2中
    参数：srcKey dstKey member
    返回值：true or false
    */
    $redis->delete('test');  
    $redis->delete('test1');  
    $redis->sadd('test','111');  
    $redis->sadd('test','333');  
    $redis->sadd('test1','222');  
    $redis->sadd('test1','444');  
    $redis->smove('test',"test1",'111');  
    print_r($redis->sort('test1'));    //结果：Array ( [0] => 111 [1] => 222 [2] => 444 )  ;

    /**

    scontains

    描述：检查集合中是否存在指定的值。
    参数：key value
    返回值：true or false
    */
    $redis->delete('test');  
    $redis->sadd('test','111');  
    $redis->sadd('test','112');  
    $redis->sadd('test','113');  
    var_dump($redis->scontains('test', '111')); //结果：bool(true) 

    /**

    ssize

    描述：返回集合中存储值的数量
    参数：key
    返回值：成功返回数组个数，失败0
    */
    $redis->delete('test');  
    $redis->sadd('test','111');  
    $redis->sadd('test','112');  
    echo $redis->ssize('test');   //结果：2  



    /**

    spop

    描述：随机移除并返回key中的一个值
    参数：key
    返回值：成功返回删除的值，失败false
    */
    $redis->delete('test');  
    $redis->sadd("test","111");  
    $redis->sadd("test","222");  
    $redis->sadd("test","333");  
    var_dump($redis->spop("test"));  //结果：string(3) "333"   

    /**

    sinter

    描述：返回一个所有指定键的交集。如果只指定一个键，那么这个命令生成这个集合的成员。如果不存在某个键，则返回FALSE。
    参数：key1, key2, keyN
    返回值：成功返回数组交集，失败false
    */
    $redis->delete('test');  
    $redis->delete('test');  
    $redis->sadd("test","111");  
    $redis->sadd("test","222");  
    $redis->sadd("test","333");  
    $redis->sadd("test1","111");  
    $redis->sadd("test1","444");  
    var_dump($redis->sinter("test","test1"));  //结果：array(1) { [0]=> string(3) "111" }  


    /**
    sinterstore

    描述：执行sInter命令并把结果储存到新建的变量中。
    参数：
    Key: dstkey, the key to store the diff into.
    Keys: key1, key2… keyN. key1..keyN are intersected as in sInter.
    返回值：成功返回，交集的个数，失败false
    */

    $redis->delete('test');  
    $redis->sadd("test","111");  
    $redis->sadd("test","222");  
    $redis->sadd("test","333");  
    $redis->sadd("test1","111");  
    $redis->sadd("test1","444");  
    var_dump($redis->sinterstore('new',"test","test1"));  //结果：int(1)  
    var_dump($redis->smembers('new'));  //结果:array(1) { [0]=> string(3) "111" } 


    /**
    sunion

描述：
返回一个所有指定键的并集
参数：
Keys: key1, key2, … , keyN
返回值：成功返回合并后的集，失败false
    */
$redis->delete('test');  
$redis->sadd("test","111");  
$redis->sadd("test","222");  
$redis->sadd("test","333");  
$redis->sadd("test1","111");  
$redis->sadd("test1","444");  
print_r($redis->sunion("test","test1"));  //结果：Array ( [0] => 111 [1] => 222 [2] => 333 [3] => 444 )




    /**
sunionstore

描述：执行sunion命令并把结果储存到新建的变量中。
参数：
Key: dstkey, the key to store the diff into.
Keys: key1, key2… keyN. key1..keyN are intersected as in sInter.
返回值：成功返回，交集的个数，失败false
    */
$redis->delete('test');  
$redis->sadd("test","111");  
$redis->sadd("test","222");  
$redis->sadd("test","333");  
$redis->sadd("test1","111");  
$redis->sadd("test1","444");  
var_dump($redis->sinterstore('new',"test","test1"));  //结果：int(4)  
print_r($redis->smembers('new'));  //结果:Array ( [0] => 111 [1] => 222 [2] => 333 [3] => 444 ) 




    /**
描述：返回第一个集合中存在并在其他所有集合中不存在的结果
参数：Keys: key1, key2, … , keyN: Any number of keys corresponding to sets in redis.
返回值：成功返回数组，失败false
    */
$redis->delete('test');  
$redis->sadd("test","111");  
$redis->sadd("test","222");  
$redis->sadd("test","333");  
$redis->sadd("test1","111");  
$redis->sadd("test1","444");  
print_r($redis->sdiff("test","test1"));  //结果：Array ( [0] => 222 [1] => 333 )  




    /**
sdiffstore

描述：执行sdiff命令并把结果储存到新建的变量中。
参数：
Key: dstkey, the key to store the diff into.
Keys: key1, key2, … , keyN: Any number of keys corresponding to sets in redis
返回值：成功返回数字，失败false
    */
$redis->delete('test');  
$redis->sadd("test","111");  
$redis->sadd("test","222");  
$redis->sadd("test","333");  
$redis->sadd("test1","111");  
$redis->sadd("test1","444");  
var_dump($redis->sdiffstore('new',"test","test1"));  //结果：int(2)  
print_r($redis->smembers('new'));  //结果:Array ( [0] => 222 [1] => 333 );


/**
smembers, sgetmembers

描述：
返回集合的内容
参数：Key: key
返回值：An array of elements, the contents of the set.
*/

$redis->delete('test');  
$redis->sadd("test","111");  
$redis->sadd("test","222");  
print_r($redis->smembers('test'));  //结果:Array ( [0] => 111 [1] => 222 ) 

?>