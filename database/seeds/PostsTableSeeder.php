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
                'id' => '1',
                'title' => '纽约-国际商档食品展的商务陪同会议翻译',
                'summary' => '纽约-国际商档食品展的商务陪同会议翻译，结束了',
            'body' => '<p style="font-family: Simsun;font-size: medium;white-space: normal;text-align: justify;background-color: rgb(255, 255, 255)">
<span style="font-family: _5b8b_4f53">在纽约的6月26-29日的翻译陪同结束了，客人是来自中国的深圳，在出口到美国的番茄供货中想打开美国纽约州市场，于是要求展会中将要出席的展商进行商谈，应客户要求，直接由我们纽约翻译员在会场见面。</span>
</p>
<p style="font-family: Simsun;font-size: medium;white-space: normal;text-align: justify;background-color: rgb(255, 255, 255)">
<span style="font-family: _5b8b_4f53">纽约是美国的经济与贸易中心，</span><span style="font-family: _5b8b_4f53;color: rgb(51, 51, 51)">位于纽约州东南哈得孙河口，濒临大西洋。 它由五个区组成：曼哈顿、布鲁克林、布朗克斯、昆斯和里士满，面积828. 8平方公里，市区人口700多万，包括郊区在内的大纽约市人口1800万。</span>
</p>
<p>
<br/>
</p>',
                'user_id' => '1',
                'created_at' => '2016-07-15 16:11:15',
                'updated_at' => '2016-07-15 16:58:22',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => '2',
                'title' => '佛罗里达奥兰多渔具展顺利',
                'summary' => '佛罗里达奥兰多渔具展顺利',
                'body' => '<p>佛罗里达奥兰多渔具展顺利</p>',
                'user_id' => '1',
                'created_at' => '2016-07-17 10:20:06',
                'updated_at' => '2016-07-17 10:20:06',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
