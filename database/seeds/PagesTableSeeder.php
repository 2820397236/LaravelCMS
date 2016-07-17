<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => '1',
                'title' => '欢迎光临，艾杰翻译',
                'nav_title' => '首页',
                'slug' => 'home',
                'body' => '<div class="hidden-xs">
<div class="jumbotron">
<div class="hidden-sm">
<h2><?php echo Config::get("app.name"); ?>，真诚为您服务</h2>
</div>
<div class="visible-sm">
<h2><?php echo Config::get("app.name"); ?>，真诚为您服务</h2>
</div>
<p class="lead">Shanghai A&J interpretation Co.Ltd</p>
<?php if (Config::get(\'credentials.regallowed\')) { ?>
<a class="btn btn-lg btn-success" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">联系我们</a>
<?php } else { ?>
<a class="btn btn-lg btn-success" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">联系我们</a>
<?php } ?>
</div>
</div>

<div class="visible-xs">
<div class="jumbotron">
<h2><?php echo Config::get("app.name"); ?></h2>
<p class="lead">Shanghai A&J interpretation Co.Ltd</p>
<?php if (Config::get(\'credentials.regallowed\')) { ?>
<a class="btn btn-lg btn-success" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">联系我们</a>
<?php } else { ?>
<a class="btn btn-lg btn-success" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">联系我们</a>
<?php } ?>
</div>
</div>

<hr>

<header id="myCarousel" class="carousel slide" style="height:300px">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<div class="fill" style="background-image:url(\'http://139.162.5.106/upload/logo/新泽西-商务宴请陪同翻译.png \');"></div>
<div class="carousel-caption">
<h2>新泽西-商务宴请陪同翻译</h2>
</div>
</div>
<div class="item">
<div class="fill" style="background-image:url(\'http://139.162.5.106/upload/logo/纽约-商务翻译导游陪同.png\');"></div>
<div class="carousel-caption">
<h2>纽约-商务翻译导游陪同</h2>
</div>
</div>
<div class="item">
<div class="fill" style="background-image:url(\'http://139.162.5.106/upload/logo/投资移民-和购买酒庄的客户共餐.png\');"></div>
<div class="carousel-caption">
<h2>投资移民-和购买酒庄的客户共餐</h2>
</div>
</div>

<div class="item">
<div class="fill" style="background-image:url(\'http://139.162.5.106/upload/logo/合同谈判与会议同声翻译.png \');"></div>
<div class="carousel-caption">
<h2>合同谈判与会议同声翻译</h2>
</div>
</div>
</div>

<!-- Controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<span class="icon-next"></span>
</a>
</header>
<hr>
<div class="row">

<div class="col-md-4 col-xs-12">
<h3>公司简介</h3>
<p>艾杰翻译(A&J Interpreter group)是一家拥有数10年的翻译经验的ALICE WONG(美国华人)创办，主要服务打算海外发展的中国企业和个人，以及海外华人提供翻译口译笔译服务。业务范围遍布美国各大城市，我们正在不断拓展我们的翻译团队，为华人提供更好更便捷的服务。我们提供导游，陪游，随同翻译，展会翻译，会议翻译，移民面试翻译，同传翻译，法庭翻译，看病翻译，大会交替翻译，合同，文件资料口译与笔译。我们会根据您的翻译需求安排合适的译员并提供合理的报价。同时我们会尽量安排本地翻译，提供了谈判效率以及节约了易地翻译的交通费用，乘坐交通的时间费用以及酒店住宿费用。祝艾杰翻译服务让您的谈判变的轻松愉快高效。</p>
<p>
<a class="btn" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">查看更多 »</a>
</p>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
<h3>成功案例</h3>
<p>
<img width="100%" src="http://139.162.5.106/upload/logo/投资移民-和购买酒庄的客户共餐.png"/>
</p>
<p>
<a class="btn" href="<?php echo URL::route("blog.posts.index"); ?>">查看更多 »</a>
</p>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
<h3>联系我们</h3>
<div>
<h5>上海艾杰翻译有限公司</h5>
<h5>Shanghai A&J interpretation Co.Ltd</h5>
<h5>美国纽约办事处联系人: Alice Wong</h5>
<h5>纽约联系电话: 626 353 1732 (New York)</h5>
<h5>微信: ALICEWPP</h5>
<br/>
<h5>上海咨询处联系人: Jacky Wong</h5>
<h5>上海联系电话: 13788997536 (Shanghai, China)</h5>
<h5>微信:  FJZQDWX</h5>
</div>
<p>
<a class="btn" href="<?php echo URL::route("pages.show", array("pages" => "about")); ?>">查看更多 »</a>
</p>
</div>

</div>',
                'css' => '<link rel="stylesheet" type="text/css" href="http://blackrockdigital.github.io/startbootstrap-modern-business/css/modern-business.css">',
                'js' => '<script>
$(\'.carousel\').carousel({
interval: 8000 //changes the speed
})
</script>',
            'show_title' => '0',
            'show_nav' => '1',
            'icon' => 'home',
            'user_id' => '1',
            'created_at' => '2016-07-06 16:22:50',
            'updated_at' => '2016-07-15 16:44:00',
            'deleted_at' => NULL,
        ),
        1 => 
        array (
            'id' => '2',
            'title' => '联系我们',
            'nav_title' => '联系我们',
            'slug' => 'contact',
            'body' => '<p class="lead">You may contact us here.</p>
<div class="well"><?php echo View::make("contact::form"); ?></div>',
            'css' => '',
            'js' => '',
            'show_title' => '1',
            'show_nav' => '0',
            'icon' => 'envelope',
            'user_id' => '1',
            'created_at' => '2016-07-06 16:22:50',
            'updated_at' => '2016-07-06 17:14:01',
            'deleted_at' => NULL,
        ),
        2 => 
        array (
            'id' => '3',
            'title' => '关于我们',
            'nav_title' => '关于我们',
            'slug' => 'about',
            'body' => '<div style="color:#666;">
<h3>上海艾杰翻译有限公司</h3>
<h4>Shanghai A&J interpretation Co.Ltd</h4>

<div>艾杰翻译(A&J Interpreter group)是一家拥有数10年的翻译经验的ALICE WONG(美国华人)创办，主要服务打算海外发展的中国企业和个人，以及海外华人提供翻译口译笔译服务。业务范围遍布美国各大城市，我们正在不断拓展我们的翻译团队，为华人提供更好更便捷的服务。我们提供导游，陪游，随同翻译，展会翻译，会议翻译，移民面试翻译，同传翻译，法庭翻译，看病翻译，大会交替翻译，合同，文件资料口译与笔译。我们会根据您的翻译需求安排合适的译员并提供合理的报价。同时我们会尽量安排本地翻译，提供了谈判效率以及节约了易地翻译的交通费用，乘坐交通的时间费用以及酒店住宿费用。祝艾杰翻译服务让您的谈判变的轻松愉快高效。<br/>

</div>
<br/>
<h4>美国纽约办事处联系人: Alice Wong</h4>
<h4>纽约联系电话: 626 353 1732 (New York, USA) </h4>
<h4>微信: ALICEWPP </h4>
<br/>
<h4>上海咨询处联系人：Jacky Wong</h4>
<h4>上海联系电话: 137 8899 7536 (Shanghai, China)</h4>
<h4>微信: FJZQDWX</h4>
</div>',
            'css' => NULL,
            'js' => NULL,
            'show_title' => '1',
            'show_nav' => '1',
            'icon' => 'info-circle',
            'user_id' => '1',
            'created_at' => '2016-07-06 16:22:50',
            'updated_at' => '2016-07-06 16:22:50',
            'deleted_at' => NULL,
        ),
        3 => 
        array (
            'id' => '8',
            'title' => '翻译项目',
            'nav_title' => '翻译项目',
            'slug' => 'project',
            'body' => '<div>     <h3>传统项目： </h3>
<p>导游，陪游，随同翻译，展会翻译，会议翻译，移民面试翻译，同传翻译，法庭翻译，看病翻译，大会交替翻译，合同，文件资料口译。</p> 
<br><h3>中英文双向互译：</h3>
<p>读信，翻译，填表，申请各类执照和福利，打电话，陪客人市内或外州办事（比如上交通法庭，加急美国护照，移民局或社会局查进度等）、旅游，购物，展览会等口译，笔译，中英文录入，打字制表，量大可到府。</p> 
<br><h3>新增项目：</h3>外州看店，签约，开店，申请或转换执照，生意买卖等填表与翻译。可陪同前往或电话翻译。（成功案例：宾州个人和店面拍照申请，当地市里C/O和照片申请，纳税登记，卫生检查验收等整套流程服务） </div>',
            'css' => '',
            'js' => '',
            'show_title' => '1',
            'show_nav' => '1',
            'icon' => 'home',
            'user_id' => '1',
            'created_at' => '2016-07-06 17:14:50',
            'updated_at' => '2016-07-06 17:35:30',
            'deleted_at' => NULL,
        ),
        4 => 
        array (
            'id' => '9',
            'title' => '翻译人员',
            'nav_title' => '翻译人员',
            'slug' => 'staff',
            'body' => '<p>美国各地翻译人员：</p>
<p>加拿大翻译人员：</p>',
            'css' => '',
            'js' => '',
            'show_title' => '1',
            'show_nav' => '1',
            'icon' => 'info-circle',
            'user_id' => '1',
            'created_at' => '2016-07-06 17:22:25',
            'updated_at' => '2016-07-06 17:22:25',
            'deleted_at' => NULL,
        ),
    ));
        
        
    }
}
