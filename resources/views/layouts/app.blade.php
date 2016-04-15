<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Document</title>

	<!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="./css/index.css" rel = "stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="./images/logo.png">
                </a>
          
            </div>
              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">网站主页</a>
                        </li>
                        <li>
                            <a href="#">关于我们</a>
                        </li>
                        <li>
                            <a href="#">新闻资讯</a>
                        </li>
                        <li>
                            <a href="#">教育服务</a>
                        </li>
                        <li>
                            <a href="#">团队精英</a>
                        </li>
                        <li>
                            <a href="#">在线留言</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
                <div class="col-md-12">
                    <div class="panel">
                        <img src="./images/11.jpg" class="img-responsive" style="width: 100%;" alt="广告位">
                    </div>
                </div>

				@yield('content')

			</div>
		</div>
	</div>

    <!-- Footer -->
    <hr>
    <footer>
    	<p class="text-center">Copyright © 2015 广州喀秋莎文化发展有限公司 &nbsp;<a href="http://www.miitbeian.gov.cn/" target="_self" style="text-decoration: underline;"><span>粤ICP备15060592号</span>
    	</a>&nbsp;<a href="#">电脑版</a>&nbsp; &nbsp;<a href="#" tppabs="http://m.kqsgz.com/">手机版</a>
    	</p>
    </footer>
	<!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>