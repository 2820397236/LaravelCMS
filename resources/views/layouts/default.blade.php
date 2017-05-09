<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="utf-8">
<META NAME ="keywords" CONTENT="艾杰翻译,导游,陪游,随同翻译,展会翻译,移民面试翻译,同传翻译,法庭翻译,大会交替翻译">
<META NAME="description" CONTENT="艾杰翻译(A&J Interpreter group)是一家拥有数10年的翻译经验的ALICE WONG(美国华人)创办，主要服务打算海外发展的中国企业和个人，以及海外华人提供翻译口译笔译服务。业务范围遍布美国各大城市，我们正在不断拓展我们的翻译团队，为华人提供更好更便捷的服务。">
<meta property="wb:webmaster" content="a6312bb6d86ccbd4" />
<meta property="qc:admins" content="2057057366721756375" />
<meta name="baidu-site-verification" content="ELMhUxQgOY" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ Config::get('app.name') }} - @section('title')
@show</title>
@include('partials.header')
</head>
<body>
<div id="wrap">
@navigation
<div class="container">
@section('top')
@show
@include('partials.notifications')
@section('content')
@show
@include('partials.footer')
@section('bottom')
@show
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?6756ec565da993022f8cf9952abe66ca";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
