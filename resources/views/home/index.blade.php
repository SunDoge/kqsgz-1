@extends('layouts.app')

@section('content')
	<!-- left nav -->
	<div class="col-md-3">
		@include('home.partials.homenav')
		@include('home.partials.news1')
	</div>
	
	<!-- main -->
	<div class = "col-md-6">
		<div style = "margin-top: 10px">
		<script type="text/javascript">
                var swfurl = "../images/player.swf";
                var pic_width = 490; //图片宽度
                var pic_height = 260; //图片高度
                var imag = new Array();
                var link = new Array();
                var text = new Array();
                imag[1] = "../images/upfiles/201510/29/a3d11d32ad6822083.jpg"; //图片
                link[1] = escape("#"); //链接
                //可编辑内容结束
                var pics = "",
                links = "",
                texts = "";
                for (var i = 1; i < imag.length; i++) {
                  pics = pics + ("|" + imag[i]);
                  links = links + ("|" + link[i]);
                  texts = texts + ("|" + text[i]);
                }
                pics = pics.substring(1);
                links = links.substring(1);
                texts = texts.substring(1);
                document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cabversion=6,0,0,0" width="' + pic_width + '" height="' + pic_height + '">');
                document.write('<param name="movie" value="' + swfurl + '">');
                document.write('<param name="quality" value="high"><param name="wmode" value="opaque">');
                document.write('<param name="FlashVars" value="bcastr_file=' + pics + '&bcastr_link=' + links + '&bcastr_title=' + texts + '">');
                document.write('<embed src="' + swfurl + '" wmode="opaque" FlashVars="bcastr_file=' + pics + '&bcastr_link=' + links + '&bcastr_title=' + texts + '& menu="false" quality="high" width="' + pic_width + '" height="' + pic_height + '" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
                document.write('</object>');
              </script>
		</div>
		<div class = "intro border">
			<div class = "left_nav_header">
				<div class = "intro_title">网站主页</div>
			</div>
			<div class = "intro_main">
				<p><span>广州喀秋莎文化发展有限公司(<a href="#">WWW.KQSGZ.COM</a>)俄语培训中心凭借公司与俄罗斯商界/政界多年的紧密合作，以及俄罗斯政府旗下推广俄罗斯文化的机构“俄罗斯世界”的加盟（”俄罗斯世界”相当于中国的孔子学院)。倾力打造以广州为基地辐射全国的专业俄语培训机构，是广州市面上唯一一家专注于俄语教育的品牌机构。
				</span></p>
				<p><span>我中心以俄籍教员为主，辅以中国老师，让学员足不出国门就能以最低的成本身临其境地学到最纯正、最地道的俄语。有研究资料表明：婴幼儿时期学习语言能力是超强的，并且能同时学会多国语言，只要照顾他的父母或保姆讲不同的语言，婴儿就会跟着模仿学说，很快也会掌握多种语言。因为有这样的语言环境，婴儿天天浸泡在这样的语言氛围中，你想让他不会都难。而我中心正是根据这个原理打造一流的俄语学习培训中心，让所有的学员一进来就仿佛到了俄罗斯这个国家，周围都是俄罗斯人，他们讲的都是俄语。你耳边每时每刻听到的也都是俄语，以营造一个真实的语言环境，促使学员以最快的速度努力融入这个学习环境，经过一段时间的浸润、熏陶，哪怕是零基础的学员，在俄籍老师耐心细致、循循善诱的教导下，也可以在很短时间内学会俄语。实践证明：零基础学员在我中心学习仅3个月就可以轻松找到底薪3千元以上的工作，5个月就可实现商务洽谈。
				</span></p>
				<p><span>我中心近年来在培养中国学生学俄语方面积累了极其丰富的经验，俄籍老师都是俄罗斯正规高等院校语言文学类专业毕业...<a href="#"  style="text-decoration: underline;color: red;font-weight:bold;">[查看详细]</a></span></p>
			</div>
		</div>
	</div>
	<!-- right nav -->
	<div class="right_nav col-md-3">
		@include('home.partials.news')
		@include('home.partials.contact')
	</div>
	<!-- teacher show -->
	<div class = "col-md-12  border">
		<div class = "left_nav_header">
			<p class = "label_title">教师风采</p>
			 <div class = "link_more"><a href="#" class = "more"></a></div>
		</div>	
		<div>
			<div id = "slide">
				<ul class = "slideul1">
				<li class = "slideli1">
				<ul class = "slideul2">
				<li><a title="教师风采" href="/?c=msg&id=540">
                     			 <img class = "border" src="../images/upfiles/201509/02/452_homepro.png" style=' width:180px; height:140px;'alt="教师风采" /><p class="title">教师风采</p>
                  			</a></li>

                     	 	<li><a title="教师风采" href="/?c=msg&id=539">
                     	 		<img class = "border" src="../images/upfiles/201509/11/454_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                     	 	</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=538">
                  				<img class = "border" src="../images/upfiles/201508/29/447_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                  			</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=537">
                      			<img class = "border" src="../images/upfiles/201508/22/445_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                    			</a></li>

 				<li><a title="教师风采" href="/?c=msg&id=536">
                      			<img class = "border" src="../images/upfiles/201509/02/450_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                   			</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=535">
                  			<img class = "border" src="../images/upfiles/201509/02/449_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                   			</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=534">
                      			<img class = "border" src="../images/upfiles/201508/29/448_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                    			</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=524">
                      			<img class = "border" src="../images/upfiles/a9/201507/08/443_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                    			</a></li>

                  			<li><a title="教师风采" href="/?c=msg&id=523">
                     			<img class = "border" src="../images/upfiles/a9/201507/08/442_homepro.jpg" style=' width:180px; height:140px;' alt="教师风采" /><p class="title">教师风采</p>
                    			</a></li>
				</ul>
				<li class = "slideli2"></li>
				</li>
			</ul>
			</div>
		</div>	
	</div>
	<!-- friend internet -->
	<div class = "col-md-12 border">
		<div class = "left_nav_header">
			<p class = "label_title">友情链接</p>
		</div>
		<div style = "margin:5px">
			<a href="http://ru-chinese.com/">
				<img src="../images/C-R.jpg">
			</a>
		</div>
	</div>

	<script type="text/javascript" src="../js/index.js"></script><script type="text/javascript">
var speed=50;
var slide = $("#slide");
var slideli1 = $(".slideli1");
var slideli2 = $(".slideli2");
slideli2.html(slideli1.html());
function Marquee(){
	if(slide.scrollLeft() >= slideli1.width())
		slide.scrollLeft(0);
	else{
		slide.scrollLeft(slide.scrollLeft()+1);
	}
}
$(function(){
	//两秒后调用
	var sliding=setInterval(Marquee,speed)
	slide.hover(function() {
		//鼠标移动DIV上停止
		clearInterval(sliding);
	},function(){
		//离开继续调用
		sliding=setInterval(Marquee,speed);
	});
});
</script> 
@stop
