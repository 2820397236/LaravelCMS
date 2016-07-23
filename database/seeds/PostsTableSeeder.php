<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => '2016年6月26-29日纽约-国际商档食品展的商务陪同会议翻译结束',
                'summary' => '2016年6月26-29日纽约-国际商档食品展的商务陪同会议翻译结束',
                'body' => '<p >
客户是来自中国的深圳，在出口到美国的番茄供货中想打开美国纽约州市场，于是要求展会中将要出席的展商进行商谈，应客户要求，直接由我们纽约翻译员在会场见面。

纽约是美国的经济与贸易中心，位于纽约州东南哈得孙河口，濒临大西洋。 它由五个区组成：曼哈顿、布鲁克林、布朗克斯、昆斯和里士满，面积828. 8平方公里，市区人口700多万，包括郊区在内的大纽约市人口1800万。
</p>
<img src="http://139.162.5.106/upload/logo/纽约-国际商档食品展商务陪同会议翻译1.jpg" width="60%"/>
<img src="http://139.162.5.106/upload/logo/纽约-国际商档食品展商务陪同会议翻译2.jpg" width="60%"/>
<img src="http://139.162.5.106/upload/logo/纽约-国际商档食品展商务陪同会议翻译3.jpg" width="60%"/>
<img src="http://139.162.5.106/upload/logo/纽约-国际商档食品展商务陪同会议翻译4.jpg" width="60%"/>',
                'user_id' => 1,
                'created_at' => '2016-07-15 16:11:15',
                'updated_at' => '2016-07-23 11:46:47',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => '2016年7月12-15日佛罗里达奥兰多渔具展顺利结束',
                'summary' => '2016年7月12-15日佛罗里达奥兰多渔具展顺利结束',
                'body' => '<p>
客人与翻译员是在纽约机场见面的，抵达奥兰多已经是7月12日深夜了，入住了当地的一家五星酒店，第二的展览访问了许多渔具展的经销商，客人是来开发新产品的，在国内从事纺织用品，为渔具商提供服装用品等。</p>
<img src="http://139.162.5.106/upload/logo/佛罗里达-奥兰多渔具展1.jpg" width="60%"/>
<img src="http://139.162.5.106/upload/logo/佛罗里达-奥兰多渔具展2.jpg" width="60%"/>',
                'user_id' => 1,
                'created_at' => '2016-07-17 10:20:06',
                'updated_at' => '2016-07-23 11:46:30',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => '7月15日至19日堪萨斯和波特兰新纺织用品客户回访结束',
                'summary' => '7月15日至19日堪萨斯和波特兰新纺织用品客户回访结束',
                'body' => '<p>客户是在一次拉斯维加斯的展会上遇到现有的美国客户的。让翻译陪同一起做了新产品介绍， 以及PPT的演讲，促进了本次的采购谈判</p>
<img src="http://139.162.5.106/upload/logo/7月15日至19日堪萨斯和波特兰新纺织用品客户回访2.jpg" width="60%">
<img src="http://139.162.5.106/upload/logo/7月15日至19日堪萨斯和波特兰新纺织用品客户回访3.jpg" width="60%">',
                'user_id' => 1,
                'created_at' => '2016-07-23 11:49:41',
                'updated_at' => '2016-07-23 11:50:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
