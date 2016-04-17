<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>

	<!-- Fonts -->
    <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>-->

    <!-- Styles -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    <link href = "./bootstrap.min.css" rel = "stylesheet" type = "text/css">
    <link href="./css/index.css" rel = "stylesheet" type="text/css">
</head>
<body>
    <script src = "./jquery-1.11.3.min.js"></script>
    <script src = "./bootstrap.min.js"></script>
    <header>
        <div class = "top">
            <div class = "top_logo">
                <img src="../images/logo.png">
            </div>
        </div>
        <div class = "mainNav">
            <ul class = "top_nav nav nav-pills">
            <li><a href = "#" title = "网站主页">网站主页</a></li>
            <li><a href = "#" title = "关于我们">关于我们</a></li>
            <li><a href = "#" title = "新闻资讯">新闻资讯</a></li>
            <li><a href = "#" title = "教育服务">教育服务</a></li>
            <li><a href = "#" title = "团队精英">团队精英</a></li>
            <li><a href = "#" title = "在线留言">在线留言</a></li>
            </ul>
        </div>
    </header>
    <div class = "container">
        <img src="../images/11.jpg">
        
        <!-- left-nav -->
           
    <!-- left-nav End -->

    <!-- main -->
            @yield('content')
    <!-- main End -->
    </div>
    <!-- Footer -->
    <hr>
    <footer>
    	<p class="text-center">Copyright © 2015 广州喀秋莎文化发展有限公司 &nbsp;<a href="http://www.miitbeian.gov.cn/" target="_self" style="text-decoration: underline;color: red"><span>粤ICP备15060592号</span>
    	</a>&nbsp;<a href="#">电脑版</a>&nbsp; &nbsp;<a href="#" tppabs="http://m.kqsgz.com/">手机版</a>
    	</p>
    </footer>
	<!-- JavaScripts -->
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
</body>
</html>